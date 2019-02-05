<?php

namespace App\Http\Controllers\Gd;
use App\Gd;
use App\PoliceStation;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class GdController extends Controller
{
    public function index(){
        $table = Gd::where('status','Pending')->orderBy('generaldairyID', 'DESC')->get();
        $policeStation = PoliceStation::orderBy('policeStationID', 'DESC')->get();
        return view('userPanel.gd.gd')->with(['table' => $table,'policeStation'=>$policeStation]);
    }

    public function save(Request $request)
    {

        $table = new Gd();
        $table->name = $request->name;
        $table->fName = $request->fName;
        $table->mName = $request->mName;
        $table->subject = $request->subject;
        $table->nid = $request->nid;
        $table->presentAddress = $request->presentAddress;
        $table->permanentAddress = $request->permanentAddress;
        $table->cDescription = $request->cDescription;
        $table->aName = $request->aName;
        $table->mobile = $request->mobile;
        $table->email = $request->email;
        $table->policeStationID = $request->policeStationID;
        $table->status = 'Pending';
        $table->save();

        $insertID = $table->generaldairyID;

        if(isset($request->gdImg)){
            $imageName = $insertID.'.jpg';

            $request->gdImg->move(public_path('image/gdImg/'), $imageName);
        }

        return redirect('dashboard')->with(config('custom.save'));
    }

    public function edit(Request $request)
    {
        $table = Gd::find($request->id);
        $table->name = $request->name;
        $table->fName = $request->fName;
        $table->mName = $request->mName;
        $table->subject = $request->subject;
        $table->nid = $request->nid;
        $table->presentAddress = $request->presentAddress;
        $table->permanentAddress = $request->permanentAddress;
        $table->cDescription = $request->cDescription;
        $table->aName = $request->aName;
        $table->mobile = $request->mobile;
        $table->email = $request->email;
        $table->policeStationID = $request->policeStationID;
        $table->save();

        return redirect()->back()->with(config('custom.edit'));
    }


    public function show_details($id){
        $gd_show = Gd::find($id);
        session([
            'generaldairyID' => $gd_show->generaldairyID,
        ]);

        $gd = Gd::where('generaldairyID',session('generaldairyID'))->get();
        $table = Gd::where('status','Pending')->orderBy('generaldairyID', 'DESC')->get();
        $policeStation = PoliceStation::orderBy('policeStationID', 'DESC')->get();
        return view('userPanel.gd.gdshow')->with(['gd_show' => $gd_show,'gd'=>$gd,'table' => $table,'policeStation'=>$policeStation]);
    }

}
