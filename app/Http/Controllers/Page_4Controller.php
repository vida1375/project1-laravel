<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Page_4Controller extends Controller
{
    public function homepage_4(){
        $posts = \App\Post::where('subject', 'بچگانه')->get();
         return view('page_4', [
             'posts' => $posts
             ]);
     }
}
