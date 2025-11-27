<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\JobController;
use Illuminate\Contracts\Queue\Job;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return "Workopia";
});

Route::get('/api/user/{id}', function () {
    return [
        'id' => Request()->id,
        'name' => 'John Doe',
        'email' => 'engamamichelurich@gmail.com'
    ];
});

Route::resource('jobs', JobController::class);

Route::get('/', [HomeController::class, 'index']);
