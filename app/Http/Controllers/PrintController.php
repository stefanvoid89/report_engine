<?php

namespace App\Http\Controllers;


use Illuminate\Support\Facades\File;
use Illuminate\Http\Request;

class PrintController extends Controller
{


    public function index(Request $request, $slug)
    {
        $slug_parsed =  preg_replace('/-/', '_', $slug);
        $params = $request->query();
        // dd([$slug, $params]);
        $service_classes = require(config_path('report.php'));
        //  dd([$service_classes, $params]);
        $service_name = $service_classes[$slug_parsed];
        // dd($service_name);
        $service = new $service_name();
        $databag = (object) $service->getData($params);
        //   dd($databag);
        $dafault_config = require(resource_path('views\\print\\reports\\default\\config.php'));
        $report_config = require(resource_path('views\\print\\reports\\' . $slug_parsed . '\\config.php'));
        $config = (object) array_merge($dafault_config, $report_config);

        // dd($config);

        $title = $databag->title;

        $header_path = $config->header ?? 'print.layout.headers.default';

        // dd($header_path);

        $header = view($header_path, ['databag' => $databag])->render();
        $footer = view('print.layout.footers.default', ['databag' => $databag])->render();

        $page = view('print.layout.main', ['header' => $header, 'footer' => $footer, 'padding' => $config->padding])->render();


        $partials = [];
        $nodes = [];

        $path = resource_path('views\\print\\reports\\' . $slug_parsed . '\\partials');

        foreach (File::allFiles($path) as $file) {
            array_push($partials, $file->getBasename('.blade.php'));
        }

        //dd($partials);
        //  dd($slug_parsed);

        foreach ($partials as $partial) {

            $rendered = view('print.reports.' . $slug_parsed . '.partials.' . $partial, ['databag' => $databag])->render();

            array_push($nodes, $rendered);
        }
        // dd($nodes);


        $data = ["config" => $config, "nodes" => $nodes, "page" => $page];

        return view("print.main", ['title' => $title, 'data' => collect($data)]);
    }
}
