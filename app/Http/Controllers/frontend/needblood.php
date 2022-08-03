<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Bloodgroup;
use App\Models\State;
use App\Models\Donor;

class needblood extends Controller
{
    public function index()
    {
        $bloodgroup = Bloodgroup::pluck('bloodgroup','id')->toArray();
        $state = State::pluck('State','id')->toArray();
        $donor = Donor::get();
        //dd($donor);
        return view('/needblood',compact('bloodgroup','state','donor'));
    }

    public function search(Request $request)
    {
        $bloodgroup = Bloodgroup::pluck('bloodgroup','id')->toArray();
        $state = State::pluck('State','id')->toArray();

        $bg = $request['bloodgroup'];
        $st = $request['state'];

        $donor = Donor::where('bloodgroup',$bg)->where('state',$st)->get();
        return view('/needblood',compact('donor','bloodgroup','state'));
    }
}
