<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\agemodel;

class add_age extends Controller
{
    public function index()
    {
        return view('admin/add_age');
    }

    public function form(Request $request)
    {
        $request->validate(
            [
                'age' => 'required|unique:age,age'
            ]
        );

        $age = new agemodel;
        $age->age = $request['age'];
        $age->save();
        if($age){
            $request->session()->flash('added_age','Age added');
            return redirect('/admin/index/add_age');
        }else{
            return redirect('/admin/index/add_age');
            // $request->session()->flash('status','0');
            // return redirect('/signup');
        }

    }
}
