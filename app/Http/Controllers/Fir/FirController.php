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

class FirController extends Controller
{
    public function index(){
        $table = Fir::where('id', Auth::user()->id)->get();
        $zila = Zila::orderBy('zilaID', 'DESC')->get();
        $upazila = Upazila::orderBy('upazilaID', 'DESC')->get();
        $crimeType = CrimeType::orderBy('crimeTypeID', 'DESC')->get();
        $policeStation = PoliceStation::orderBy('policeStationID', 'DESC')->get();
        return view('userPanel.fir.fir')->with(['table' => $table,'zila'=>$zila,
            'upazila'=>$upazila,'policeStation'=>$policeStation,'crimeType'=>$crimeType]);
    }

    //where('status','Pending')->

    public function save(Request $request)
    {

        $table = new Fir();
        $table->vName = $request->vName;
        $table->vfName = $request->vfName;
        $table->vmName = $request->vmName;
        $table->vMobile = $request->vMobile;
        $table->vNid = $request->vNid;
        $table->vAge = $request->vAge;
        $table->vPresentAddress = $request->vPresentAddress;
        $table->vPermanentAddress = $request->vPermanentAddress;
        $table->cName = $request->cName;
        $table->cfName = $request->cfName;
        $table->cMobile = $request->cMobile;
        $table->cAge = $request->cAge;
        $table->cPresentAddress = $request->cPresentAddress;
        $table->cPermanentAddress = $request->cPermanentAddress;
        $table->cName1 = $request->cName1;
        $table->cfName1 = $request->cfName1;
        $table->cName2 = $request->cName2;
        $table->cfName2 = $request->cfName2;
        $table->cDate = date('Y-m-d', strtotime(str_replace("/", "-",  $request->cDate)));
        $table->cLocation = $request->cLocation;
        $table->cTime = $request->cTime;
        $table->cDescription = $request->cDescription;
        $table->policeStationID = $request->policeStationID;
        $table->zilaID = $request->zilaID;
        $table->upazilaID = $request->upazilaID;
        $table->crimeTypeID = $request->crimeTypeID;
        $table->status = 'Pending';
        $table->save();
        return redirect()->back()->with(config('custom.save'));
    }

    public function edit(Request $request)
    {
        $table = Fir::find($request->id);
        $table->vName = $request->vName;
        $table->vfName = $request->vfName;
        $table->vmName = $request->vmName;
        $table->vMobile = $request->vMobile;
        $table->vNid = $request->vNid;
        $table->vAge = $request->vAge;
        $table->vPresentAddress = $request->vPresentAddress;
        $table->vPermanentAddress = $request->vPermanentAddress;
        $table->cName = $request->cName;
        $table->cfName = $request->cfName;
        $table->cMobile = $request->cMobile;
        $table->cAge = $request->cAge;
        $table->cPresentAddress = $request->cPresentAddress;
        $table->cPermanentAddress = $request->cPermanentAddress;
        $table->cName1 = $request->cName1;
        $table->cfName1 = $request->cfName1;
        $table->cName2 = $request->cName2;
        $table->cfName2 = $request->cfName2;
        $table->cDate = date('Y-m-d', strtotime(str_replace("/", "-",  $request->cDate)));
        $table->cLocation = $request->cLocation;
        $table->cTime = $request->cTime;
        $table->cDescription = $request->cDescription;
        $table->policeStationID = $request->policeStationID;
        $table->zilaID = $request->zilaID;
        $table->upazilaID = $request->upazilaID;
        $table->crimeTypeID = $request->crimeTypeID;
        $table->save();

        return redirect()->back()->with(config('custom.edit'));
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
        return view('userPanel.fir.firShow')->with(['crimeType'=>$crimeType,'zila'=>$zila,'upazila'=>$upazila,'fir_show' => $fir_show,'fir'=>$fir,'table' => $table,'policeStation'=>$policeStation]);
    }
}
