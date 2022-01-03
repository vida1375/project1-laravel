<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Page_1Controller extends Controller
{
    public function homepage_1(){
       $posts = \App\Post::all();
        return view('page_1', [
            'posts' => $posts
            ]);
    }
}
