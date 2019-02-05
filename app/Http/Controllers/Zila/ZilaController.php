<?php

namespace App\Http\Controllers\Zila;

use App\Zila;
use App\Division;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ZilaController extends Controller
{
    public function index(){
        $table = Zila::orderBy('zilaID', 'DESC')->get();
        $division = Division::orderBy('divisionID', 'DESC')->get();
        return view('zila.zila')->with(['table' => $table,'division'=>$division]);
    }
    public function save(Request $request)
    {

        $table = new Zila();

        $table->divisionID = $request->divisionID;
        $table->name = $request->name;
        $table->save();

        return redirect()->back()->with(config('custom.save'));
    }
    public function edit(Request $request)
    {

        $table= Zila::find($request->id);

        $table->divisionID = $request->divisionID;
        $table->name = $request->name;
        $table->save();

        return redirect()->back()->with(config('custom.edit'));
    }
    public function del($id){
        $table = Zila::find($id);
        $table->delete();

        return redirect()->back()->with(config('custom.del'));
    }
}
