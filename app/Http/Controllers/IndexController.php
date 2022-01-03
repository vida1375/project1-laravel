<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function search(Request $request){
        $search = $request->get('search');
        $posts = \App\Post::where('product_name', 'LIKE', '%' . $search . '%')->get();
        return view('index', [
            'posts' => $posts
            ]);
     }
}
