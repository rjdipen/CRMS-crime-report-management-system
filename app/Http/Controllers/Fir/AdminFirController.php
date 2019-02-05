<?php

namespace App\Http\Controllers\Fir;
use App\Zila;
use App\Upazila;
use App\PoliceStation;
use App\CrimeType;
use App\Fir;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class AdminFirController extends Controller
{
    public function index(){
        $table = Fir::where('status','Pending')->orderBy('firID', 'DESC')->get();
        $zila = Zila::orderBy('zilaID', 'DESC')->get();
        $upazila = Upazila::orderBy('upazilaID', 'DESC')->get();
        $crimeType = CrimeType::orderBy('crimeTypeID', 'DESC')->get();
        $policeStation = PoliceStation::orderBy('policeStationID', 'DESC')->get();
        return view('admin.firRegistration.newFir')->with(['table' => $table,'zila'=>$zila,
            'upazila'=>$upazila,'policeStation'=>$policeStation,'crimeType'=>$crimeType]);
    }

    public function del($id){
        $table = Fir::find($id);
        $table->delete();
        return redirect()->back()->with(config('custom.del'));
    }

    public function running(Request $request){
        $table= Fir::find($request->id);
        $table->status = 'Running';
        $table->save();

        return redirect()->back()->with(config('custom.success'));
    }

    public function running_fir(){
        $table = Fir::where('status','Running')->orderBy('firID', 'DESC')->get();
        $zila = Zila::orderBy('zilaID', 'DESC')->get();
        $upazila = Upazila::orderBy('upazilaID', 'DESC')->get();
        $crimeType = CrimeType::orderBy('crimeTypeID', 'DESC')->get();
        $policeStation = PoliceStation::orderBy('policeStationID', 'DESC')->get();
        return view('admin.firRegistration.runningFir')->with(['table' => $table,'zila'=>$zila,
            'upazila'=>$upazila,'policeStation'=>$policeStation,'crimeType'=>$crimeType]);
    }

    public function complete(Request $request){
        $table= Fir::find($request->id);
        $table->status = 'Completed';
        $table->completeDate = date('Y-m-d');
        $table->save();

        return redirect()->back()->with(config('custom.success'));
    }

    public function complete_fir(){
        $table = Fir::where('status','Completed')->orderBy('firID', 'DESC')->get();
        $zila = Zila::orderBy('zilaID', 'DESC')->get();
        $upazila = Upazila::orderBy('upazilaID', 'DESC')->get();
        $crimeType = CrimeType::orderBy('crimeTypeID', 'DESC')->get();
        $policeStation = PoliceStation::orderBy('policeStationID', 'DESC')->get();
        return view('admin.firRegistration.completedFir')->with(['table' => $table,'zila'=>$zila,
            'upazila'=>$upazila,'policeStation'=>$policeStation,'crimeType'=>$crimeType]);
    }


    public function fir_details($id){
        $fir_show = Fir::find($id);
        session([
            'firID' => $fir_show->firID,
        ]);
        $crimeType = CrimeType::orderBy('crimeTypeID', 'DESC')->get();
        $zila = Zila::orderBy('zilaID', 'DESC')->get();
        $upazila = Upazila::orderBy('upazilaID', 'DESC')->get();
        $fir = Fir::where('firID',session('firID'))->get();
        $table = Fir::where('status','Pending')->orderBy('firID', 'DESC')->get();
        $policeStation = PoliceStation::orderBy('policeStationID', 'DESC')->get();
        return view('admin.firRegistration.firDetails')->with(['crimeType'=>$crimeType,'zila'=>$zila,'upazila'=>$upazila,'fir_show' => $fir_show,'fir'=>$fir,'table' => $table,'policeStation'=>$policeStation]);
    }

}
