<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestController extends Controller
{
    public function index()
    {
         $posts = [
        ['id' => '1', 'title' => 'laravel', 'posted_by' => 'Ahmed', 'cerated_at' => '2023-9-7'],
        ['id' => '2', 'title' => 'PHP', 'posted_by' => 'Muhameed', 'cerated_at' => '2023-9-4'],
    ];
    return view('posts.index', [
        'posts' => $posts

    ]);
    }
}
