<?php

namespace App\Http\Controllers;

use App\Models\Contest;
use Illuminate\Http\Request;

class FrontLottaryController extends Controller
{
    private $contest;
    private $contests;
    public function index()
    {
        $this->contests=Contest::where('status',1)->orderBy('id','desc')->get();
        return view('front.lottery.index',['contests'=>$this->contests]);
    }
    public function detail($id)
    {
        $this->contest=Contest::where('status',1)->where('id',$id)->first();
        return view('front.lottery.detail',['contest'=>$this->contest]);
    }
}
