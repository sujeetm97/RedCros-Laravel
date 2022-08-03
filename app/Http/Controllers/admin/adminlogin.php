<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\admin;
use Illuminate\Support\Facades\Validator;

class adminlogin extends Controller
{
    public function index()
    {
        return view('admin.login');
    }

    public function login(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required',
            'password' => 'required'
        ]);

        if ($validator->fails()) {
            // dd($validator);
            return redirect('/admin-login')
                        ->withErrors($validator)
                        ->withInput();
        }

        $name = $request['name'];
        $password = $request['password'];
        $check = admin::where('name','LIKE',"$name")->where('password','LIKE',"$password")->first();

        if(!is_null($check))
        {
            $request->session()->put('admin',$request['name']);
            $request->session()->flash('admin_sucess','Login success');
            return redirect('/admin/index');
        }else{
            $request->session()->flash('admin_fail','Invalid Email or password');
            return view('/admin-login');
        }

        // $ADMIN = new admin;
        // dd($ADMIN);
        // echo '<pre>';
        // print_r($request->all());
    }
}
