<?php

namespace App\Http\Controllers\PoliceStation;

use App\PoliceStation;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PoliceStationController extends Controller
{
    public function index(){
        $table = PoliceStation::orderBy('policeStationID', 'DESC')->get();
        return view('policeStation.policeStation')->with(['table' => $table]);
    }

    public function save(Request $request){
        $table = new PoliceStation();
        $table->name = $request->name;
        $table->address = $request->address;
        $table->save();

        return redirect()->back()->with(config('custom.save'));
    }
    public function edit(Request $request)
    {
        $table= PoliceStation::find($request->id);
        $table->name = $request->name;
        $table->address = $request->address;
        $table->save();

        return redirect()->back()->with(config('custom.save'));
    }
    public function del($id){
        $table = PoliceStation::find($id);
        $table->delete();

        return redirect()->back()->with(config('custom.del'));
    }
}
