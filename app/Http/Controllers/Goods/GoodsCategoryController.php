<?php

namespace App\Http\Controllers\Goods;

use App\GoodsCategory;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class GoodsCategoryController extends Controller
{
    public function index(){
        $table = GoodsCategory::orderBy('goodsCategoryID', 'DESC')->get();
        return view('goodsCategory.goodsCategory')->with(['table' => $table]);
    }

    public function save(Request $request){
        $table = new GoodsCategory();
        $table->name = $request->name;
        $table->save();

        return redirect()->back()->with(config('custom.save'));
    }
    public function edit(Request $request)
    {
        $table= GoodsCategory::find($request->id);
        $table->name = $request->name;
        $table->save();

        return redirect()->back()->with(config('custom.save'));
    }
    public function del($id){
        $table = GoodsCategory::find($id);
        $table->delete();

        return redirect()->back()->with(config('custom.del'));
    }
}
