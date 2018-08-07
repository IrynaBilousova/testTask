<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ValidationController extends Controller
{
    public function index($mac_address, $ip_address)
    {

        $array = [
            ['ip_address' => '111.111.111.111', 'mac_address' => 'e4:R4:u7:6t:5r'],
            ['ip_address' => '151.15.16.161', 'mac_address' => 'e4:F4:u7:6t:5r'],
            ['ip_address' => '167.141.111.141', 'mac_address' => 'e4:R5:u7:6t:5r'],
            ['ip_address' => '111.111.111.131', 'mac_address' => 'Z4:R4:u7:6t:5r'],
        ];


        $handle = fopen('log.txt', 'a');


         foreach ($array  as $key => $value) {
             fwrite($handle, $ip_address . 'vs' . $mac_address);

             if ($value['ip_address'] === $ip_address && $value['mac_address'] === $mac_address)
                 return response()->json(['success' => true], 200);
         }

        fclose($handle);
        return response()->json(['success' => false ], 200);
    }
}
