<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\agemodel;
use App\Models\Bloodgroup;
use App\Models\State;
use App\Models\City;
use App\Models\Donor;
use Illuminate\Support\Facades\Validator;

class donorcontroller extends Controller
{
    public function index()
    {
        $age = agemodel::pluck('age','age_id')->toArray();
        $bloodgroup = Bloodgroup::pluck('bloodgroup','id')->toArray();
        $state = State::pluck('State','id')->toArray();
        $city = City::pluck('city','id')->toArray();

        //dd($state);
        return view('donor',compact('age','bloodgroup','state','city'));
    }

    public function form(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required',
            'email' => 'required|email|unique:donor,email',
            'mobileNO' => 'required|numeric|min:10',
            'bloodgroup' => 'required',
            'gender' => 'required',
            'age' => 'required',
            'state' => 'required',
            'city' => 'required'
        ]);

        if ($validator->fails()) {
            // dd($validator);
            return redirect('/donor')
                        ->withErrors($validator)
                        ->withInput();
        }

        $donor = new Donor;
        $donor->name = $request['name'];
        $donor->email = $request['email'];
        $donor->mobileNO = $request['mobileNO'];
        $donor->bloodgroup = $request['bloodgroup'];
        $donor->user_gender = $request['gender'];
        $donor->age = $request['age'];
        $donor->state = $request['state'];
        $donor->city = $request['city'];
        $donor->save();

        if($donor){
            $request->session()->flash('donor_status','1');
            return redirect('/profile');
        }else{
            $request->session()->flash('donor_status','0');
            return redirect('/donor');
        }


    }
}
