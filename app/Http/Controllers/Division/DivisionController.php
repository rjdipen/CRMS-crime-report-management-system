<?php

namespace App\Http\Controllers\Division;

use App\Division;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class DivisionController extends Controller
{
    public function index(){
        $table = Division::orderBy('DivisionID', 'DESC')->get();
        return view('division.division')->with(['table' => $table]);
    }

    public function save(Request $request){
        $table = new Division();
        $table->name = $request->name;
        $table->save();

        return redirect()->back()->with(config('custom.save'));
    }
    public function edit(Request $request)
    {
        $table= Division::find($request->id);
        $table->name = $request->name;
        $table->save();

        return redirect()->back()->with(config('custom.save'));
    }
    public function del($id){
        $table = Division::find($id);
        $table->delete();

        return redirect()->back()->with(config('custom.del'));
    }
}
