<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Viber\Bot;
use Viber\Api\Sender;
use Monolog\Logger;
use Monolog\Handler\StreamHandler;
use Viber\Api\Message\Text;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        // $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $apiKey = "4b92dc4773a7dc02-7188d6133d66b9bf-922422d30147fabc";

        // reply name
        $botSender = new Sender([
            'name' => 'Stefan bot',
            'avatar' => 'https://developers.viber.com/img/favicon.ico',
        ]);

        // log bot interaction
        $log = new Logger('bot');
        $log->pushHandler(new StreamHandler('/tmp/bot.log'));

        try {
            // create bot instance
            $bot = new Bot(['token' => $apiKey]);
            $bot
                ->onConversation(function ($event) use ($bot, $botSender, $log) {
                    $log->info('onConversation ' . var_export($event, true));
                    // this event fires if user open chat, you can return "welcome message"
                    // to user, but you can't send more messages!
                    return (new Text())
                        ->setSender($botSender)
                        ->setText('Can i help you?');
                })
                ->onText('|whois .*|si', function ($event) use ($bot, $botSender, $log) {
                    $log->info('onText whois ' . var_export($event, true));
                    // match by template, for example "whois Bogdaan"
                    $bot->getClient()->sendMessage(
                        (new Text())
                            ->setSender($botSender)
                            ->setReceiver($event->getSender()->getId())
                            ->setText('I do not know )')
                    );
                })
                ->onText('|.*|s', function ($event) use ($bot, $botSender, $log) {
                    $log->info('onText ' . var_export($event, true));
                    // .* - match any symbols
                    $bot->getClient()->sendMessage(
                        (new Text())
                            ->setSender($botSender)
                            ->setReceiver($event->getSender()->getId())
                            ->setText('HI!')
                    );
                })
                ->onPicture(function ($event) use ($bot, $botSender, $log) {
                    $log->info('onPicture ' . var_export($event, true));
                    $bot->getClient()->sendMessage(
                        (new Text())
                            ->setSender($botSender)
                            ->setReceiver($event->getSender()->getId())
                            ->setText('Nice picture ;-)')
                    );
                })
                ->on(function ($event) {
                    return true; // match all
                }, function ($event) use ($log) {
                    $log->info('Other event: ' . var_export($event, true));
                })
                ->run();
        } catch (\Exception $e) {
            $log->warning('Exception: ', $e->getMessage());
            if ($bot) {
                $log->warning('Actual sign: ' . $bot->getSignHeaderValue());
                $log->warning('Actual body: ' . $bot->getInputBody());
            }
        }


        //  return view('home');
    }
}
