<?php

namespace App\Http\Controllers\MostWanted;

use App\CrimeType;
use App\PoliceStation;
use App\Gender;
use App\MostWanted;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class MostWantedController extends Controller
{
    public function index(){
        $table = MostWanted::where('status','Running')->orderBy('mostwantedID', 'DESC')->get();
        $crimeType = CrimeType::orderBy('crimeTypeID', 'DESC')->get();
        $gender = Gender::orderBy('genderID', 'DESC')->get();
        $policeStation = PoliceStation::orderBy('policeStationID', 'DESC')->get();
        return view('admin.mostWanted.mostWanteds')->with(['table' => $table,'crimeType'=>$crimeType,
            'gender'=>$gender,'policeStation'=>$policeStation]);
    }

    public function save(Request $request)
    {

        $table = new MostWanted();
        $table->name = $request->name;
        $table->age = $request->age;
        $table->height = $request->height;
        $table->weight = $request->weight;
        $table->bodyColor = $request->bodyColor;
        $table->hairColor = $request->hairColor;
        $table->prizeMoney = $request->prizeMoney;
        $table->contact = $request->contact;
        $table->description = $request->description;
        $table->status ='Running';
        $table->tag = $request->tag;
        $table->crimeTypeID = $request->crimeTypeID;
        $table->genderID = $request->genderID;
        $table->policeStationID = $request->policeStationID;
        $table->save();

        $insertID = $table->mostwantedID;

        if(isset($request->wantedImage)){
            $imageName = $insertID.'.jpg';

            $request->wantedImage->move(public_path('image/mostWantedImg/'), $imageName);
        }

        return redirect()->back()->with(config('custom.save'));
    }

    public function edit(Request $request)
    {
       // dd($request);

        $table = MostWanted::find($request->id);

        $table->name = $request->name;
        $table->age = $request->age;
        $table->height = $request->height;
        $table->weight = $request->weight;
        $table->bodyColor = $request->bodyColor;
        $table->hairColor = $request->hairColor;
        $table->prizeMoney = $request->prizeMoney;
        $table->contact = $request->contact;
        $table->tag = $request->tag;
        $table->description = $request->description;
        $table->crimeTypeID = $request->crimeTypeID;
        $table->genderID = $request->genderID;
        $table->policeStationID = $request->policeStationID;
        $table->save();

        return redirect()->back()->with(config('custom.edit'));
    }

    public function show(Request $request)
    {

        $table = MostWanted::find($request->id);

        $table->name = $request->name;
        $table->age = $request->age;
        $table->height = $request->height;
        $table->weight = $request->weight;
        $table->bodyColor = $request->bodyColor;
        $table->hairColor = $request->hairColor;
        $table->prizeMoney = $request->prizeMoney;
        $table->contact = $request->contact;
        $table->tag = $request->tag;
        $table->description = $request->description;
        $table->crimeTypeID = $request->crimeTypeID;
        $table->genderID = $request->genderID;
        $table->policeStationID = $request->policeStationID;
        $table->save();

        return redirect()->back()->with(config('custom.edit'));
    }

    public function del($id){
        $table = MostWanted::find($id);
        $table->delete();
        return redirect()->back()->with(config('custom.del'));
    }

    public function completed_mostwanted(){
        $table = MostWanted::where('status','Complete')->get();
        $crimeType = CrimeType::orderBy('crimeTypeID', 'DESC')->get();
        $gender = Gender::orderBy('genderID', 'DESC')->get();
        $policeStation = PoliceStation::orderBy('policeStationID', 'DESC')->get();

        return view('admin.mostWanted.mostWantedComplete')->with(['table'=>$table,'crimeType'=>$crimeType,
            'gender'=>$gender,'policeStation'=>$policeStation]);
    }

    public function complete(Request $request){
        $table= MostWanted::find($request->id);
        $table->status = 'Complete';
        $table->completedDate = date('Y-m-d');
        $table->save();

        return redirect()->back()->with(config('custom.success'));
    }
}
