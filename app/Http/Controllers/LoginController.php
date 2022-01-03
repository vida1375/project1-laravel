<?php

namespace App\Http\Controllers;

use App\Login;
use Validator;
use DB;
use Illuminate\Support\Facades\Input;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('logins.create');
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
                return redirect('/logins/create')
                            ->withErrors($validator)
                            ->withInput();
            }
            // $user =DB::table('signups')->where('user_name','=',$user_name)->Where('password', '=',$password)->get(); // model or null

            $user =DB::table('signups')->where('user_name', Input::get('user_name'))->Where('password', Input::get('password'))->get(); // model or null
if ($user) {
    return redirect('/product');
}
else {
    return redirect('/signups/create');
}

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Login  $login
     * @return \Illuminate\Http\Response
     */
    public function show(Login $login)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Login  $login
     * @return \Illuminate\Http\Response
     */
    public function edit(Login $login)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Login  $login
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Login $login)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Login  $login
     * @return \Illuminate\Http\Response
     */
    public function destroy(Login $login)
    {
        //
    }
}
