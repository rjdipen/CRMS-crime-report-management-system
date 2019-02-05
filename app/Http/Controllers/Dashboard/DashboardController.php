<?php

namespace App\Http\Controllers\Dashboard;
use App\Division;
use App\Gender;
use App\MissingPerson;
use App\GoodsCategory;
use App\GoodsSubcategory;
use App\MissingGoods;
use App\Gd;
use App\Fir;
use App\Zila;
use App\Upazila;
use App\CrimeType;
use App\PoliceStation;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    public  function index(){
        $table = Gd::orderBy('generaldairyID', 'DESC')->where('id', Auth::user()->id)->get();
        $fir = Fir::orderBy('firID', 'DESC')->where('id', Auth::user()->id)->get();
        $gender = Gender::orderBy('genderID','DESC')->get();
        $division = Division::orderBy('divisionID','DESC')->get();
        $missingPerson = MissingPerson::orderBy('missingPersonID', 'DESC')->where('id', Auth::user()->id)->get();
        $goodsCategory = GoodsCategory::orderBy('goodsCategoryID', 'DESC')->get();
        $missingGoods = MissingGoods::where('id', Auth::user()->id)->get();
        $goodsSubcategory = GoodsSubcategory::orderBy('goodsSubcategoryID', 'DESC')->get();
        $policeStation = PoliceStation::orderBy('policeStationID', 'DESC')->get();
        return view('userPanel.dashboard.dashboard')->with(['table' => $table,'missingGoods'=>$missingGoods,
            'missingPerson'=>$missingPerson,'gender'=>$gender,'division'=>$division,'fir'=>$fir,
            'policeStation'=>$policeStation,'goodsCategory'=>$goodsCategory,'goodsSubcategory'=>$goodsSubcategory]);

    }

    public function good_save(Request $request)
    {
        $table = new MissingGoods();
        $table->name = $request->name;
        $table->imeChessis = $request->imeChessis;
        $table->lPlace = $request->lPlace;
        $table->goodsColor = $request->goodsColor;
        $table->contact = $request->contact;
        $table->missingDate = date('Y-m-d', strtotime(str_replace("/", "-",  $request->missingDate)));
        $table->tag = $request->tag;
        $table->status = 'Pending';
        $table->description = $request->description;
        $table->goodsCategoryID = $request->goodsCategoryID;
        $table->goodsSubcategoryID = $request->goodsSubcategoryID;
        $table->policeStationID = $request->policeStationID;
        $table->save();

        $insertID = $table->missingGoodsID;

        if (isset($request->missingGoodsImg)) {
            $imageName = $insertID . '.jpg';

            $request->missingGoodsImg->move(public_path('image/missingGoodsImg/'), $imageName);
        }
        return redirect()->back()->with(config('custom.save'));
    }

    public function good_edit(Request $request)
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

    public function person_save(Request $request)
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
        $table->status ='Pending';
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

    public function person_edit(Request $request)
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
        $table->status ='Pending';
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


}
