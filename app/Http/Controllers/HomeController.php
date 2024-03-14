<?php

namespace App\Http\Controllers;

use App\Models\Contest;
use Illuminate\Http\Request;
use Session;
use Carbon\Carbon;

class HomeController extends Controller
{
    private $contests;
    public function index()
    {
        $this->contests=Contest::where('status',1)->orderBy('id','desc')->get();
        return view('front.home.home',['contests'=>$this->contests]);
    }

    public function cantact()
    {
        return view('front.home.cantact');
    }


}
