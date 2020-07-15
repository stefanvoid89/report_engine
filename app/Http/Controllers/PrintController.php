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

        //dd($databag);

        $report_path = $main_config['reports'][$report]['path'] ?? 'common/' . $report;

        // dd($report_path);

        $databag->logo = $main_config['logo'];


        $dafault_config = require(resource_path('views/print/common/default/config.php'));
        $report_config = require(resource_path('views/print/' . $report_path . '/config.php'));
        $config = (object) array_merge($dafault_config, $report_config);

        // dd($config);

        $title = $config->title ?? $databag->title;

        $header_path = $config->header ?? 'print.common.headers.default';
        $footer_path = $config->footer ?? 'print.common.footers.default';

        $style = $config->style ?? null;

        $size = $config->size;
        $orientation = $config->orientation == 'portrait' ? '' : $config->orientation;
        $size .= ' ' . $orientation;



        // dd($header_path);

        $header = view($header_path, ['databag' => $databag])->render();
        $footer = view($footer_path, ['databag' => $databag])->render();

        $page = view('print.page', ['header' => $header, 'footer' => $footer, 'padding' => $config->padding, 'size' => $size])->render();


        $partials = [];
        $nodes = [];

        $path = resource_path('views/print/' . $report_path . '/partials');

        foreach (File::allFiles($path) as $file) {
            array_push($partials, $file->getBasename('.blade.php'));
        }

        sort($partials);

        //   dd($partials);

        $test = [];

        foreach ($partials as $partial) {


            array_push($test, $partial);

            // $rendered = view('print.reports.' . $report . '.partials.' . $partial, ['databag' => $databag])->render();
            $rendered = view('print.' . str_replace('/', '.', $report_path) . '.partials.' . $partial, ['databag' => $databag])->render();

            array_push($nodes, $rendered);
        }
        //  dd($test);


        $data = ["config" => $config, "nodes" => $nodes, "page" => $page];

        return view("print.main", ['title' => $title, 'data' => collect($data), 'style' => $style, 'size' => $size]);
    }

    public function test()
    {
        return "hello from report_engine";
    }

    public function number_to_text()
    {
        $broj = 1742;
        $str = \App\Data\NumberToText::vrati_string_en($broj);
        dd($str);

        //     dd(\App\Data\NumberToText::vrati_decimale($broj));
    }
}
