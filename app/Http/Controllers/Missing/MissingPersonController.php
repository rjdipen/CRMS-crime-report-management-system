<?php

namespace App\Http\Controllers\Missing;

use App\MissingPerson;
use App\Division;
use App\Gender;
use App\PoliceStation;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class MissingPersonController extends Controller
{
    public function index(){
        $table = MissingPerson::where('status','Pending')->where('policeStationID', Auth::user()->policeStationID)->get();
        $division = Division::orderBy('divisionID', 'DESC')->get();
        $gender = Gender::orderBy('genderID', 'DESC')->get();
        $policeStation = PoliceStation::orderBy('policeStationID', 'DESC')->get();
        return view('admin.missing.person')->with(['table' => $table,'division'=>$division,
            'gender'=>$gender,'policeStation'=>$policeStation]);
    }


    public function save(Request $request)
    {

        $table = new MissingPerson();
        $table->name = $request->name;
        $table->age = $request->age;
        $table->height = $request->height;
        $table->weight = $request->weight;
        $table->bodyColor = $request->bodyColor;
        $table->hairColor = $request->hairColor;
        $table->clothes = $request->clothes;
        $table->missingDate = date("Y-m-d", strtotime(str_replace("/", "-",  $request->missingDate)));

        $table->contact = $request->contact;
        $table->description = $request->description;
        $table->status ='Running';
        $table->tag = $request->tag;
        $table->divisionID = $request->divisionID;
        $table->genderID = $request->genderID;
        $table->policeStationID = $request->policeStationID;
        $table->save();

        $insertID = $table->missingPersonID;

        if(isset($request->missingPersonImg)){
            $imageName = $insertID.'.jpg';

            $request->missingPersonImg->move(public_path('image/missingPersonImg/'), $imageName);
        }

        return redirect()->back()->with(config('custom.save'));
    }

    public function edit(Request $request)
    {

        $table = MissingPerson::find($request->id);
        $table->name = $request->name;
        $table->age = $request->age;
        $table->height = $request->height;
        $table->weight = $request->weight;
        $table->bodyColor = $request->bodyColor;
        $table->hairColor = $request->hairColor;
        $table->clothes = $request->clothes;
        $table->missingDate = date('Y-m-d',strtotime(str_replace("/", "-",  $request->missingDate)));
        $table->contact = $request->contact;
        $table->description = $request->description;
        $table->tag = $request->tag;
        $table->divisionID = $request->divisionID;
        $table->genderID = $request->genderID;
        $table->policeStationID = $request->policeStationID;
        $table->save();

        $insertID = $table->missingPersonID;

        if(isset($request->missingPersonID)){
            $imageName = $insertID.'.jpg';

            $request->missingPersonImg->move(public_path('image/missingPersonImg/'), $imageName);
        }

        return redirect()->back()->with(config('custom.save'));
    }

    public function del($id){
        $table = MissingPerson::find($id);
        $table->delete();
        return redirect()->back()->with(config('custom.del'));
    }
//============== Start Missing person Running======================

    public function running_person(){
        $table = MissingPerson::where('status','Running')->where('policeStationID', Auth::user()->policeStationID)->get();
        $division = Division::orderBy('divisionID', 'DESC')->get();
        $gender = Gender::orderBy('genderID', 'DESC')->get();
        $policeStation = PoliceStation::orderBy('policeStationID', 'DESC')->get();

        return view('admin.missing.runningMissingPerson')->with(['table'=>$table,'division'=>$division,
            'gender'=>$gender,'policeStation'=>$policeStation]);
    }

    public function running(Request $request){
        $table= MissingPerson::find($request->id);
        $table->status = 'Running';
        $table->save();

        return redirect()->back()->with(config('custom.success'));
    }
//============== Start Missing person complete======================

    public function completed_person(){
        $table = MissingPerson::where('status','Completed')->where('policeStationID', Auth::user()->policeStationID)->get();
        $division = Division::orderBy('divisionID', 'DESC')->get();
        $gender = Gender::orderBy('genderID', 'DESC')->get();
        $policeStation = PoliceStation::orderBy('policeStationID', 'DESC')->get();

        return view('admin.missing.personComplete')->with(['table'=>$table,'division'=>$division,
            'gender'=>$gender,'policeStation'=>$policeStation]);
    }

    public function complete(Request $request){
        $table= MissingPerson::find($request->id);
        $table->status = 'Completed';
        $table->completeDate = date('Y-m-d');
        $table->save();

        return redirect()->back()->with(config('custom.success'));
    }
}
