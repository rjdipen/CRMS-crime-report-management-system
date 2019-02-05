<?php

namespace App\Http\Controllers\Missing;

use App\MissingPerson;
use App\Gender;
use App\Division;
use App\PoliceStation;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class UserPersonController extends Controller
{
    public function index(Request $request){
        $s = $request->input('s');
        $table = MissingPerson::where('status','Running')->orderBy('missingPersonID', 'DESC')->search($s)->paginate(9);
        $gender = Gender::orderBy('genderID', 'DESC')->get();
        $division = Division::orderBy('divisionID', 'DESC')->get();
        $policeStation = PoliceStation::orderBy('policeStationID', 'DESC')->get();
        return view('userPanel.missing.person.person')->with(['table' => $table,'s'=>$s,'gender'=>$gender,
            'division'=>$division,'policeStation'=>$policeStation]);
    }

    public function edit(Request $request)
    {

        $table = MissingGoods::find($request->id);
        $table->name = $request->name;
        $table->imeChessis = $request->imeChessis;
        $table->lPlace = $request->lPlace;
        $table->goodsColor = $request->goodsColor;
        $table->contact = $request->contact;
        $table->missingDate = date('Y-m-d',strtotime(str_replace("/", "-",  $request->missingDate)));
        $table->tag = $request->tag;
        $table->status ='Pending';
        $table->description = $request->description;
        $table->goodsCategoryID = $request->goodsCategoryID;
        $table->goodsSubcategoryID = $request->goodsSubcategoryID;
        $table->policeStationID = $request->policeStationID;
        $table->save();

        $insertID = $table->missingGoodsID;

        if(isset($request->missingGoodsImg)){
            $imageName = $insertID.'.jpg';

            $request->missingGoodsImg->move(public_path('image/missingGoodsImg/'), $imageName);
        }

        return redirect()->back()->with(config('custom.del'));
    }

//    public function search(Request $request){
//        $s = $request->input('s');
//        $table = MissingPerson::where('status','Running')->orderBy('missingPersonID', 'DESC')->search($s)->paginate(1);
////        $gender = Gender::orderBy('genderID', 'DESC')->get();
////        $division = Division::orderBy('divisionID', 'DESC')->get();
////        $policeStation = PoliceStation::orderBy('policeStationID', 'DESC')->get();
//        return view('userPanel.missing.person.person')->with(['table' => $table,'s'=>$s]);
//    }

}
