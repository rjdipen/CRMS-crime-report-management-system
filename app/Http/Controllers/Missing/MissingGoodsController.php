<?php

namespace App\Http\Controllers\Missing;

use App\MissingGoods;
use App\GoodsCategory;
use App\GoodsSubcategory;
use App\PoliceStation;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class MissingGoodsController extends Controller
{
    public function index(){
        $table = MissingGoods::where('status','Pending')->where('policeStationID', Auth::user()->policeStationID)->get();
        $goodsCategory = GoodsCategory::orderBy('goodsCategoryID', 'DESC')->get();
        $goodsSubcategory = GoodsSubcategory::orderBy('goodsSubcategoryID', 'DESC')->get();
        $policeStation = PoliceStation::orderBy('policeStationID', 'DESC')->get();
        return view('admin.missing.goods')->with(['table' => $table,'goodsCategory'=>$goodsCategory,
            'goodsSubcategory'=>$goodsSubcategory,'policeStation'=>$policeStation]);
    }

    public function save(Request $request)
    {

        $table = new MissingGoods();
        $table->name = $request->name;
        $table->imeChessis = $request->imeChessis;
        $table->lPlace = $request->lPlace;
        $table->goodsColor = $request->goodsColor;
        $table->contact = $request->contact;
        $table->missingDate = date('Y-m-d', strtotime(str_replace("/", "-",  $request->missingDate)));
        $table->tag = $request->tag;
        $table->status = 'Running';
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

    public function del($id){
        $table = MissingGoods::find($id);
        $table->delete();
        return redirect()->back()->with(config('custom.del'));
    }

//============== Start Missing Goods Running======================

    public function running_goods(){
        $table = MissingGoods::where('status','Running')->where('policeStationID', Auth::user()->policeStationID)->get();
        $goodsCategory = GoodsCategory::orderBy('goodsCategoryID', 'DESC')->get();
        $goodsSubcategory = GoodsSubcategory::orderBy('goodsSubcategoryID', 'DESC')->get();
        $policeStation = PoliceStation::orderBy('policeStationID', 'DESC')->get();

        return view('admin.missing.runningMissingGoods')->with(['table'=>$table,'goodsCategory'=>$goodsCategory,
            'goodsSubcategory'=>$goodsSubcategory,'policeStation'=>$policeStation]);
    }

    public function running(Request $request){
        $table= MissingGoods::find($request->id);
        $table->status = 'Running';
        $table->save();

        return redirect()->back()->with(config('custom.success'));
    }

//============== Start Missing Goods Complete======================

    public function completed_goods(){
        $table = MissingGoods::where('status','Complete')->where('policeStationID', Auth::user()->policeStationID)->get();
        $goodsCategory = GoodsCategory::orderBy('goodsCategoryID', 'DESC')->get();
        $goodsSubcategory = GoodsSubcategory::orderBy('goodsSubcategoryID', 'DESC')->get();
        $policeStation = PoliceStation::orderBy('policeStationID', 'DESC')->get();

        return view('admin.missing.goodsComplete')->with(['table'=>$table,'goodsCategory'=>$goodsCategory,
            'goodsSubcategory'=>$goodsSubcategory,'policeStation'=>$policeStation]);
    }

    public function complete(Request $request){
        $table= MissingGoods::find($request->id);
        $table->status = 'Complete';
        $table->completeDate = date('Y-m-d');
        $table->save();

        return redirect()->back()->with(config('custom.success'));
    }
}
