<?php

namespace App\Http\Controllers\Goods;

use App\GoodsCategory;
use App\GoodsSubcategory;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class GoodsSubcategoryController extends Controller
{
    public function index()
    {
        $table = GoodsSubcategory::orderBy('goodsSubcategoryID', 'DESC')->get();
        $goodsCategory = GoodsCategory::orderBy('goodsCategoryID', 'DESC')->get();
        return view('goodsSubcategory.goodsSubcategory')->with(['table' => $table, 'goodsCategory' => $goodsCategory]);
    }

    public function save(Request $request)
    {

        $table = new GoodsSubcategory();

        $table->goodsCategoryID = $request->goodsCategoryID;
        $table->name = $request->name;
        $table->save();

        return redirect()->back()->with(config('custom.save'));
    }

    public function edit(Request $request)
    {

        $table = GoodsSubcategory::find($request->id);
        $table->goodsCategoryID = $request->goodsCategoryID;
        $table->name = $request->name;
        $table->save();

        return redirect()->back()->with(config('custom.edit'));
    }

    public function del($id)
    {
        $table = GoodsSubcategory::find($id);
        $table->delete();

        return redirect()->back()->with(config('custom.del'));
    }
}
