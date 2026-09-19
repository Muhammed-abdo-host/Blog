<?php

use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});


Route::get('/test', function () {

    $posts = [
        ['id' => '1', 'title' => 'laravel', 'posted_by' => 'Ahmed', 'cerated_at' => '2023-9-7'],
        ['id' => '2', 'title' => 'PHP', 'posted_by' => 'Muhameed', 'cerated_at' => '2023-9-4'],
    ];
    return view('test', [
        'posts' => $posts

    ]);
});
