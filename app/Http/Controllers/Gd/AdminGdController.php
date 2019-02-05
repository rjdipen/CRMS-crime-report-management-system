<?php

namespace App\Http\Controllers\Gd;
use App\Gd;
use App\PoliceStation;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class AdminGdController extends Controller
{
    public function index(){
        $table = Gd::where('status','Pending')->where('policeStationID', Auth::user()->policeStationID)->get();
        $policeStation = PoliceStation::orderBy('policeStationID', 'DESC')->get();
        return view('admin.gd.newGd')->with(['table' => $table,'policeStation'=>$policeStation]);
    }

    public function running(Request $request){
        $table= Gd::find($request->id);
        $table->status = 'Running';
        $table->save();

        return redirect()->back()->with(config('custom.success'));
    }

    public function running_gd(){
        $table = Gd::where('status','Running')->where('policeStationID', Auth::user()->policeStationID)->get();
        $policeStation = PoliceStation::orderBy('policeStationID', 'DESC')->get();
        return view('admin.gd.runningGd')->with(['table' => $table,'policeStation'=>$policeStation]);
    }

    public function complete(Request $request){
        $table= Gd::find($request->id);
        $table->status = 'Complete';
        $table->completeDate = date('Y-m-d');
        $table->save();

        return redirect()->back()->with(config('custom.success'));
    }

    public function complete_gd(){
        $table = Gd::where('status','Complete')->where('policeStationID', Auth::user()->policeStationID)->get();
        $policeStation = PoliceStation::orderBy('policeStationID', 'DESC')->get();
        return view('admin.gd.completeGd')->with(['table' => $table,'policeStation'=>$policeStation]);
    }

    public function del($id){
        $table = Gd::find($id);
        $table->delete();
        return redirect()->back()->with(config('custom.del'));
    }

    //This is for show Details
    public function show_details($id){
        $gd_show = Gd::find($id);
        session([
            'generaldairyID' => $gd_show->generaldairyID,
        ]);

        $gd = Gd::where('generaldairyID',session('generaldairyID'))->get();
        $table = Gd::where('status','Pending')->orderBy('generaldairyID', 'DESC')->get();
        $policeStation = PoliceStation::orderBy('policeStationID', 'DESC')->get();
        return view('admin.gd.gdDetails')->with(['gd_show' => $gd_show,'gd'=>$gd,'table' => $table,'policeStation'=>$policeStation]);
    }
}
