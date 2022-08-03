<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\usermodel;
use Illuminate\Support\Facades\Validator;

class signUpcontroller extends Controller
{
    public function index()
    {
        return view('signup');
    }

    public function form(Request $request)
    {

        $validator = Validator::make($request->all(), [
            'name' => 'required',
            'email' => 'required|email|unique:user,user_email',
            'password' => 'required',
            'confirm_password' => 'required|same:password',
            'mobileNO' => 'required|numeric|min:10',
            'dob' => 'required',
            'gender' => 'required',
            'address' => 'required'
        ]);

        if ($validator->fails()) {
            // dd($validator);
            return redirect('/signup')
                        ->withErrors($validator)
                        ->withInput();
        }

        $user = new usermodel;
        $user->user_email = $request['email'];
        $user->user_name = $request['name'];
        $user->user_mobileNO = $request['mobileNO'];
        $user->user_address = $request['address'];
        $user->user_gender = $request['gender'];
        $user->user_dob = $request['dob'];
        $user->user_password = md5($request['password']);
        $user->save();
        if($user){
            $request->session()->flash('status','1');
            return redirect('/login');
        }else{
            $request->session()->flash('status','0');
            return redirect('/signup');
        }
    }

    //     $request->validate(
        //     [
        //         /* validation part , validate() is a method */
        //         /* regex:/(.*)@myemail\.com/i|unique:users */
        //         'name' => 'required',
        //         'user_email' => 'required|email',
        //         'password' => 'required',
        //         'confirm_password' => 'required|same:password',
        //         'mobileNO' => 'required|numeric|min:10',
        //         'dob' => 'required',
        //         'gender' => 'required',
        //         'address' => 'required'
        //     ]
        // );
}
