<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Page_3Controller extends Controller
{
    public function homepage_3(){
        $posts = \App\Post::where('subject', 'زنانه')->get();
         return view('page_3', [
             'posts' => $posts
             ]);
     }
}
