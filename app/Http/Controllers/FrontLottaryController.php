<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FrontLottaryController extends Controller
{
    public function index()
    {
        return view('front.lottery.index');
    }
}
