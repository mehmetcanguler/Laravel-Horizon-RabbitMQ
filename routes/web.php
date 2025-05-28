<?php

use App\Jobs\ExampleJob;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/test-job', function () {
    ExampleJob::dispatch('Merhaba RabbitMQ & Horizon!');
    return 'Job kuyruğa atıldı.';
});