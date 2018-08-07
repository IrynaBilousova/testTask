@extends('layouts.app')

@section('content')
    @include('clients._form')

    <div class="card mt-2">
            <table border="1">
                <tr>
                    <th>Name</th>
                    <th>Phone</th>
                    <th>Email</th>
                    <th>Ip Address</th>
                    <th>MAC Address</th>
                </tr>
                @foreach($clients as $client)
                    <tr>
                        <td>{{$client->name}}</td>
                        <td>{{$client->phone}}</td>
                        <td>{{$client->email}}</td>
                        <td>{{$client->ip_address}}</td>
                        <td>{{$client->mac_address}}</td>
                    </tr>
                @endforeach
            </table>
        </div>

@endsection