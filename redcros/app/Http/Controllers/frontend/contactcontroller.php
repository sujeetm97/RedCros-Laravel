<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class contactcontroller extends Controller
{
    public function index(){
        return view('contact');
    }
    public function contactform()
    {
        return view('contact');
    }
}
