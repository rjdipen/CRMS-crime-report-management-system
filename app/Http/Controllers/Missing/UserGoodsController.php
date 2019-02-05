<?php

namespace App\Http\Controllers\Missing;

use App\MissingGoods;
use App\GoodsCategory;
use App\GoodsSubcategory;
use App\PoliceStation;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class UserGoodsController extends Controller
{
    public function index(Request $request){
        $s = $request->input('s');
        $table = MissingGoods::where('status','Running')->orderBy('missingGoodsID', 'DESC')->search($s)->paginate(9); //show all running goods in goods page
        $goodsCategory = GoodsCategory::orderBy('goodsCategoryID', 'DESC')->get();
        $goodsSubcategory = GoodsSubcategory::orderBy('goodsSubcategoryID', 'DESC')->get();
        $policeStation = PoliceStation::orderBy('policeStationID', 'DESC')->get();
        return view('userPanel.missing.goods.goods')->with(['table' => $table,'goodsCategory'=>$goodsCategory,'s'=>$s,
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





//============== Start user  Missing Goods======================

    public function goods_session($id){

        $table = GoodsSubcategory::find($id);
        $goodsCategory = GoodsCategory::orderBy('goodsCategoryID', 'DESC')->get();
        $missing_goods = MissingGoods::where('goodsSubcategoryID', session('goodsSubcategoryID'))->orderBy('goodsSubcategoryID', 'DESC')->get();

        session([
            'goodsSubcategoryID' => $table->goodsSubcategoryID,
            'subcategoryName' => $table->name
        ]);

        return view('userPanel.missing.goods.subcat_good')->with(['missing_goods'=>$missing_goods,'goodsCategory'=>$goodsCategory,'table'=>$table]);
    }

//============== End user  Missing Goods======================


}
