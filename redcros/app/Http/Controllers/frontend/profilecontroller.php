<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\usermodel;
use App\Models\Donor;
Use App\Models\User;

class profilecontroller extends Controller
{
    public function index()
    {
        $u1 =session()->get('user_email');
        //dd($u1);
        $user = usermodel::where('user_email',$u1)->get();
        $donor = Donor::where('email',$u1)->get();
        //$users = array_merge($user->toArray(),$donors->toArray());
        //dd($donors);
        return view('profile',compact('user','donor'));
    }

    // public function form(Request $request)
    // {
    //     // $u1 =session()->get('user_email');
    //     // $user = usermodel::where('user_email',$u1)->get();
    //     // $donor = Donor::where('email',$u1)->get();

    //     return $request->file('image')->store('uploads');
    //     // echo '<pre>';
    //     // print_r($request->all());


    //     // return view('profile',compact('user','donor'));
    // }

    public function form(Request $request)
    {
        $input = $request->all();
        $request->validate([
            'file' => 'required',
        ]);

        $data=new User;
        if($files=$input['file']){
            dd($files->getClientOriginalName());
            $name=time().'_'.$files->getClientOriginalName();
            $files->move(public_path('uploads'),$name);
            $data->profile=$name;
        }
        dd($data);

        // $fileName = time().'_'.$request->file;
        // $request->file->move(public_path('uploads'), $fileName);
        return back()
            ->with('success','You have successfully upload file.')
            ->with('file',$fileName);
    }
}
