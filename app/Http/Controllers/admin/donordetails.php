<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Donor;

class donordetails extends Controller
{
    public function index()
    {
        $donor = Donor::get();
        //dd($donor);
        return view('admin.donordetails',compact('donor'));
    }

    public function deletedonor($id)
    {
        $donor = Donor::get();
        $donorr = Donor::find($id);
        if(!is_null($donorr))
        {
            $donorr->delete();
        }

        return view('admin.donordetails',compact('donor'));
        // echo '<pre>';
        // print_r($donor);
    }
}
