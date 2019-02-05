<?php

namespace App\Http\Controllers\Upazila;

use App\Zila;
use App\Upazila;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class UpazilaController extends Controller
{
    public function index(){
        $table = Upazila::orderBy('upazilaID', 'DESC')->get();
        $zila = Zila::orderBy('zilaID', 'DESC')->get();
        return view('upazila.upazila')->with(['table' => $table,'zila'=>$zila]);
    }
    public function save(Request $request)
    {

        $table = new Upazila();

        $table->zilaID = $request->zilaID;
        $table->name = $request->name;
        $table->save();

        return redirect()->back()->with(config('custom.save'));
    }
    public function edit(Request $request)
    {

        $table = Upazila::find($request->id);

        $table->zilaID = $request->zilaID;
        $table->name = $request->name;
        $table->save();

        return redirect()->back()->with(config('custom.edit'));
    }
    public function del($id){
        $table = Upazila::find($id);
        $table->delete();

        return redirect()->back()->with(config('custom.del'));
    }
}
