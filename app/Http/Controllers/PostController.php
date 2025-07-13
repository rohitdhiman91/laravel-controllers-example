<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()
    {
        $posts = [
            ['id' => 1, 'title' => 'Laravel Basics'],
            ['id' => 2, 'title' => 'Using Controllers'],
            ['id' => 3, 'title' => 'Blade Templates'],
        ];

        return view('posts', compact('posts'));
    }

    public function show($id)
    {
        return "You are viewing post with ID: $id";
    }
}
