<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\CountactUs;

class contactdetails extends Controller
{
    public function index()
    {
        $contact = CountactUs::get();
        return view('admin.contactdetails',compact('contact'));
    }

    public function deletecontact($id)
    {
        $contact = CountactUs::get();
        $contactt = CountactUs::find($id);
        if(!is_null($contactt))
        {
            $contactt->delete();
        }
        return view('admin.contactdetails',compact('contact'));
    }
}
