<?php

namespace App\Http\Controllers;

use App\Signup;
use Validator;
use Illuminate\Http\Request;

class SignupController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('signups.create');
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
            'user_name' => 'required',
            'password' => 'required',
        ],[
            'user_name.required' => 'نام کاربر خالی است',
            'password.required' => 'رمز خالی است',
            ]);

            if ($validator->fails()) {
                return redirect('/signups/create')
                            ->withErrors($validator)
                            ->withInput();
            }
           $signup = new \App\signup;
           $signup->user_name = $request->user_name;
           $signup->password = $request->password;
           $signup->save();
       return redirect('/product');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Signup  $signup
     * @return \Illuminate\Http\Response
     */
    public function show(Signup $signup)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Signup  $signup
     * @return \Illuminate\Http\Response
     */
    public function edit(Signup $signup)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Signup  $signup
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Signup $signup)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Signup  $signup
     * @return \Illuminate\Http\Response
     */
    public function destroy(Signup $signup)
    {
        //
    }
}
