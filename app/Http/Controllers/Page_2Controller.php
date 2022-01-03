<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Page_2Controller extends Controller
{
    public function homepage_2(){
        $posts = \App\Post::where('subject', 'مردانه')->get();
         return view('page_2', [
             'posts' => $posts
             ]);
     }
}
