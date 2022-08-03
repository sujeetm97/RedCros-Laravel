<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\usermodel;

class logincontroller extends Controller
{
    public function index()
    {
        return view('login');
    }

    public function form(Request $request)
    {
        $request->validate(
            [
                'email' => 'required|email|regex:/^([a-z0-9\+_\-]+)(\.[a-z0-9\+_\-]+)*@([a-z0-9\-]+\.)+[a-z]{2,6}$/ix',
                'password' => 'required'
            ]
        );

        $email = $request['email'];
        $password = md5($request['password']);
        $check = usermodel::where('user_email','LIKE',"$email")->where('user_password','LIKE',"$password")->first();

        if(!is_null($check))
        {
            $request->session()->put('user_email',$request['email']);
            $request->session()->flash('login_sucess','Login success');
            return redirect('/');
        }else{
            $request->session()->flash('login_fail','Invalid Email or password');
            return view('/login');
        }

    }
}
