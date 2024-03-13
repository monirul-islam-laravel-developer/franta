<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FrontAboutUs extends Controller
{
    public function index()
    {
        return view('front.aboutus.index');
    }
}
