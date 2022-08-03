<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\CountactUs;
use Illuminate\Support\Facades\Validator;

class contactcontroller extends Controller
{
    public function index(){
        return view('contact');
    }
    public function contactform(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required',
            'email' => 'required|email|unique:contactus,email',
            'subject' => 'required',
            'message' => 'required'
        ]);

        if ($validator->fails()) {
            // dd($validator);
            return redirect('/contact')
                        ->withErrors($validator)
                        ->withInput();
        }

        $contactus = new CountactUs;
        $contactus->name = $request['name'];
        $contactus->email = $request['email'];
        $contactus->subject = $request['subject'];
        $contactus->message = $request['message'];
        $contactus->save();

        if($contactus){
            $request->session()->flash('contact_status','1');
            return redirect('/contact');
        }else{
            $request->session()->flash('databaseERROR','0');
            return redirect('/contact');
        }
        // echo '<pre>';
        // print_r($request->all());
        //return view('contact');
    }
}
