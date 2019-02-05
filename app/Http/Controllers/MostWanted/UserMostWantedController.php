<?php

namespace App\Http\Controllers\MostWanted;

use App\CrimeType;
use App\PoliceStation;
use App\Gender;
use App\MostWanted;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class UserMostWantedController extends Controller
{
    public function index(Request $request){
        $s = $request->input('s');
        $table = MostWanted::where('status','Running')->orderBy('mostwantedID', 'DESC')->search($s)->paginate(12);
        $crimeType = CrimeType::orderBy('crimeTypeID', 'DESC')->get();
        $gender = Gender::orderBy('genderID', 'DESC')->get();
        $policeStation = PoliceStation::orderBy('policeStationID', 'DESC')->get();
        return view('userPanel.mostWanted.mostWanted')->with(['table' => $table,'s'=>$s,'crimeType'=>$crimeType,
            'gender'=>$gender,'policeStation'=>$policeStation]);
    }
}
