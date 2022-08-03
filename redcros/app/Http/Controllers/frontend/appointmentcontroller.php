<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class appointmentcontroller extends Controller
{
    public function index(){
        return view('appointment');
    }

    public function appointmentform()
    {
        return view('appointment');
    }
}
