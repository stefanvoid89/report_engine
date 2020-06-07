<?php

namespace App\Http\Controllers;


use Illuminate\Support\Facades\File;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PrintController extends Controller
{


    public function index(Request $request)
    {

        $query = $request->query();
        $hash = "";
        $params = [];
        $all_config = config('report');
        $main_config = [];

        try {
            $hash = $query['hash'];
            $report = $query['report'];
            $main_config = $all_config[$hash];
            $params = $query['params'];
        } catch (\Exception $ex) {
            return;
        }
        $connection = $main_config['connection'];

        $service_name = $main_config['reports'][$report]['class'];
        // dd($service_name);
        $service = new $service_name();
        $databag = (object) $service->getData($params, $connection);
        //   dd($databag);

        $report_path = $main_config['reports'][$report]['path'] ?? 'common\\' . $report;

        // dd($report_path);

        $dafault_config = require(resource_path('views\\print\\reports\\common\\default\\config.php'));
        $report_config = require(resource_path('views\\print\\reports\\' . $report_path . '\\config.php'));
        $config = (object) array_merge($dafault_config, $report_config);

        // dd($config);

        $title = $databag->title;

        $header_path = $config->header ?? 'print.layout.headers.default';
        $footer_path = $config->footer ?? 'print.layout.footers.default';

        // dd($header_path);

        $header = view($header_path, ['databag' => $databag])->render();
        $footer = view($footer_path, ['databag' => $databag])->render();

        $page = view('print.layout.main', ['header' => $header, 'footer' => $footer, 'padding' => $config->padding])->render();


        $partials = [];
        $nodes = [];

        $path = resource_path('views\\print\\reports\\' . $report_path . '\\partials');

        foreach (File::allFiles($path) as $file) {
            array_push($partials, $file->getBasename('.blade.php'));
        }

        //dd($partials);
        //  dd($slug_parsed);

        foreach ($partials as $partial) {

            // $rendered = view('print.reports.' . $report . '.partials.' . $partial, ['databag' => $databag])->render();
            $rendered = view('print.reports.' . str_replace('\\', '.', $report_path) . '.partials.' . $partial, ['databag' => $databag])->render();

            array_push($nodes, $rendered);
        }
        // dd($nodes);


        $data = ["config" => $config, "nodes" => $nodes, "page" => $page];

        return view("print.main", ['title' => $title, 'data' => collect($data)]);
    }
}
