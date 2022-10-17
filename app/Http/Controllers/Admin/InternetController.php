<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use RouterOS\Client;
use RouterOS\Query;

class InternetController extends Controller
{

    public function index()
    {
        $client = new Client([
            'host' => '103.153.136.74',
            'user' => 'ucup',
            'pass' => 'salman13',
            'port' => 8828,
        ]);

        // QUESUE
        $interface = new Query('/interface/print'); 
        $interfaces = $client->query($interface)->read(); 

        $iproute = new Query('/ip/route/print');
        $iproutes = $client->query($iproute)->read(); 

        $queue = new Query('/queue/simple/print');
        $queues = $client->query($queue)->read(); 

        $arp = (new Query('/ip/arp/print'));
        $arps = $client->query($arp)->read(); 
        // dd(count($interfaces));
        // dd($arps);

        return view('admin.internet.index', compact(['interfaces', 'iproutes', 'queues', 'arps']));
    }
}
