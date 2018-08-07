<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Client;


class ClientController extends Controller
{

    /**
     * Display a listing of the clients.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $clients = Client::all();
        return view('clients.index', compact('clients'));
    }


    /**
     * Store a newly created client in database.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'phone' => 'required',
            'mac_address' => 'required',
            'email' => 'required|string|email|max:255',
            'ip_address' => 'required|string|ip|max:255',
        ]);

        $mac_address =  $request->input('mac_address');
        $ip_address  = $request->input('ip_address');

        $client = new \GuzzleHttp\Client();
        $res = $client->request('GET', "http://127.0.0.1:80/clients/validate+{$mac_address}+{$ip_address}");

        $body = $res->getBody();

        $obj = json_decode($body);

        if($obj->success){
            Client::create($request->all());
            return back()->with('success', 'New client is registered successfully.');
        }
            return back()->with('failure', 'IP Address and MAC Address don`t match.');

    }
}
