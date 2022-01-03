<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class PageController extends Controller
{
    Public function index(){
        return view('pages.home');
    }
    public function layout(Request $request){
        $category = $request->input('category');
        $post = DB::table('posts')
                    ->where('product_name', '=', $category)
                    ->get();
                    // return view('pages.index_1',[
                    //     'posts' => $posts
                    //     ]);

    //now get all user and services in one go without looping using eager loading
    //In your foreach() loop, if you have 1000 users you will make 1000 queries

    // $post = Post::with('services', function($query) use ($category) {
    //      $query->where('category', 'LIKE', '%' . $category . '%');
    // })->get();

    // return view('pages.index_1', compact('post'));
    }
}
