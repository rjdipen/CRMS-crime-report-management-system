<?php

namespace App\Http\Controllers\Gender;

use App\Gender;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class GenderController extends Controller
{
    public function index(){
        $table = Gender::orderBy('genderID', 'DESC')->get();
        return view('gender.gender')->with(['table' => $table]);
    }

    public function save(Request $request){
        $table = new Gender();
        $table->name = $request->name;
        $table->save();

        return redirect()->back()->with(config('custom.save'));
    }
    public function edit(Request $request)
    {
        $table= Gender::find($request->id);
        $table->name = $request->name;
        $table->save();

        return redirect()->back()->with(config('custom.save'));
    }
    public function del($id){
        $table = Gender::find($id);
        $table->delete();

        return redirect()->back()->with(config('custom.del'));
    }
}
