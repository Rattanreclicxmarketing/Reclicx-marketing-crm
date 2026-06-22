<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Http;

Route::get('/test-api', function () {

    $response = Http::withHeaders([

        'Authorization' => 'Bearer YOUR_API_KEY',

        'Content-Type' => 'application/json',

    ])->post('API_URL_HERE',[

        'name' => 'Ajay',

        'phone' => '9876543210',

        'address' => 'Delhi',

        'product' => 'Weight Loss',

        'amount' => 1499,

    ]);

    return $response->json();

});