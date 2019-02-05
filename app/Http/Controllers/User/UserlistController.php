<?php

namespace App\Http\Controllers\User;

use App\User;
use App\PoliceStation;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class UserlistController extends Controller
{
    public function index(){
        $table = User::where('userType','User')->get();
        $policeStation = PoliceStation::orderBy('policeStationID', 'DESC')->get();
        return view('userList.userList')->with(['table'=>$table,'policeStation'=>$policeStation]);
    }

    public function del($id){
        $table = User::find($id);
        $table->delete();
        return redirect()->back()->with(config('custom.del'));
    }

    public function userToAdmin(Request $request){
        $table= User::find($request->id);
        $table->userType = 'Admin';
        $table->save();

        return redirect()->back()->with(config('custom.success'));
    }

    public function adminList(){
        $table = User::where('userType','Admin')->get();
        $policeStation = PoliceStation::orderBy('policeStationID', 'DESC')->get();
        return view('userList.adminList')->with(['table'=>$table,'policeStation'=>$policeStation]);
    }
}
