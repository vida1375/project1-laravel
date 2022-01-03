<?php

namespace App\Http\Controllers;

use App\Coment;

use Validator;
use Illuminate\Http\Request;

class ComentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $coments = \App\Coment::paginate(10);
        return view('coments.index',[
            'coments' => $coments
        ]);
    }
    // public function home_1(Coment $coment){
    //     return view('coments.show',[
    //         'coment' => $coment,
    //         'coments' => Coment::all()
    //     ]);
    // }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('coments.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'comment_name' => 'required',
            'comment_text' => 'required',
        ],[
            'comment_name.required' => 'نام شما خالی است',
            'comment_text.required' => 'متن پیام خالی است',
            ]);

            if ($validator->fails()) {
                return redirect('/coments/create')
                            ->withErrors($validator)
                            ->withInput();
            }
           $coment = new \App\coment;
           $coment->comment_name = $request->comment_name;
           $coment->comment_text = $request->comment_text;
           $coment->save();
       return redirect('/coments');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Coment  $coment
     * @return \Illuminate\Http\Response
     */
    public function show(Coment $coment)
    {
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Coment  $coment
     * @return \Illuminate\Http\Response
     */
    public function edit(Coment $coment)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Coment  $coment
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Coment $coment)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Coment  $coment
     * @return \Illuminate\Http\Response
     */
    public function destroy(Coment $coment)
    {
        //
    }
}
