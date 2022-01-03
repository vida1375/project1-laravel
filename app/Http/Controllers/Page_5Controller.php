<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Page_5Controller extends Controller
{
    public function homepage_5(){
        $posts = \App\Post::where('subject', 'اکسسوری')->get();
         return view('page_5', [
             'posts' => $posts
             ]);
     }
}
