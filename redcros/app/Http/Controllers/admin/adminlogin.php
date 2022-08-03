<?php
namespace App\Http\Controllers\frontend;
namespace App\Http\Controllers\admin;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class adminlogin extends Controller
{
    public function index()
    {
        return view('admin/adminlogin');
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
            return view('admin/adminlogin');
        }

    }


}
