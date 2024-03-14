<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Contest;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class ContestController extends Controller
{
    private $categories;
    private $contests;
    private $contest;
    public function index()
    {
        $this->categories=Category::all();
        return view('admin.contest.add',['categories'=>$this->categories]);
    }
    public function create(Request $request)
    {
        Contest::newContest($request);
        Alert::Success('Contest Create Successfully');
        return redirect()->back();
    }
    public function manage()
    {
        $this->contests=Contest::orderBy('id','desc')->get();
        return view('admin.contest.manage',['contests'=>$this->contests]);
    }
    public function edit($id)
    {
        $this->categories=Category::all();
        $this->contest=Contest::find($id);
        return view('admin.contest.edit',['contest'=>$this->contest,
            'categories'=>$this->categories
            ]);
    }
    public function update(Request $request,$id)
    {
        Contest::updateContest($request,$id);
        Alert::Success('Contest Update Successfully');
        return redirect()->route('contest.manage');
    }
    public function delete($id)
    {
        $this->contest=Contest::find($id);
        if (file_exists($this->contest->image))
        {
            unlink($this->contest->image);
        }
        $this->contest->delete();
        Alert::Success('Contest Delete Successfully');
        return redirect()->route('contest.manage');
    }
}
