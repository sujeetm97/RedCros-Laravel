<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\State;
use App\Models\City;
use App\Models\usermodel;
use App\Models\Donor;
use App\Models\Bloodgroup;
use Illuminate\Support\Facades\Validator;

class updateprofile extends Controller
{
    public function index()
    {
        $u1 =session()->get('user_email');
        //dd($u1);
        $user = usermodel::where('user_email',$u1)->get()->toArray();
        $donor = Donor::where('email',$u1)->get();
        $bloodgroup = Bloodgroup::get()->toArray();
        $city = City::get()->ToArray();
        $state = State::get()->toArray();
        //$users = array_merge($user->toArray(),$donors->toArray());
        //dd($donors);
        //dd($bloodgroup);
        return view('updateprofile',compact('user','donor','bloodgroup','city','state'));
        //return view('updateprofile');
    }

    public function update(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required',
            'email' => 'required|email|unique:user,user_email',
            'mobileNO' => 'required|numeric|min:10',
            'dob' => 'required',
            'gender' => 'required',
            'address' => 'required',
            'bloodgroup' => 'required'
        ]);

        if ($validator->fails()) {
            // dd($validator);
            return redirect('/updateprofile')
                        ->withErrors($validator)
                        ->withInput();
        }



        $email = $request->session()->get('user_email');
        $find = usermodel::where('user_email',$email)->get();
        $abc = Donor::where('email',$email)->get();

        foreach($find as $finds)
        {
            $id = $finds->user_id;
            $user = usermodel::find($id);
            $user->user_email = $request['email'];
            $user->user_name = $request['name'];
            $user->user_mobileNO = $request['mobileNO'];
            $user->user_address = $request['address'];
            $user->user_gender = $request['gender'];
            $user->user_dob = $request['dob'];
            $user->save();
        }
        foreach($abc as $abcd)
        {
           $id = $abcd->id;
           $donor = Donor::find($id);
           $donor->name = $request['name'];
           $donor->email = $request['email'];
           $donor->mobileNO = $request['mobileNO'];
           $donor->bloodgroup = $request['bloodgroup'];
           $donor->user_gender = $request['gender'];
           $donor->state = $request['state'];
           $donor->city = $request['city'];
           $donor->save();
        }

        if($user && $donor){
            $request->session()->put('user_email',$request['email']);
            $request->session()->flash('update_status','1');
            return redirect('/profile');
        }else{
            $request->session()->put('user_email',$email);
            $request->session()->flash('update_fail','0');
            return redirect('/profile');
        }


        //dd($user->user_name);

        // echo '<pre>';
        // print_r($request->all());
    }
}
