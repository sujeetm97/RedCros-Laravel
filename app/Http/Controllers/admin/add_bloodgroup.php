<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Bloodgroup;

class add_bloodgroup extends Controller
{
    public function index()
    {
        return view('admin.add_bloodgroup');
    }

    public function form(Request $request)
    {
        $request->validate(
            [
                'bloodgroup' => 'required|unique:bloodgroup,bloodgroup'
            ]
        );

        $bg = new Bloodgroup;
        $bg->bloodgroup = $request['bloodgroup'];
        $bg->save();
        if($bg){
            $request->session()->flash('added_bloodgroup','BloodGroup added');
            return redirect('/admin/index/add_bloodgroup');
        }else{
            return redirect('/admin/index/add_bloodgroup');
            // $request->session()->flash('status','0');
            // return redirect('/signup');
        }

        // echo '<pre>';
        // print_r($request->all());
    }
}
