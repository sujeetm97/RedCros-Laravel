<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\usermodel;

class userdetails extends Controller
{
    public function index()
    {
        $user = usermodel::get();
        return view('admin.userdetails',compact('user'));
    }

    public function deleteuser($id)
    {
        $user = usermodel::get();
        $userr = usermodel::find($id);
        //dd($userr);
        if(!is_null($userr))
        {
            $userr->delete();
        }

        return view('admin.userdetails',compact('user'));
    }
}
