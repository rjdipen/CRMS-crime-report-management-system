<?php

namespace App\Http\Controllers\Blog;

use App\BlogCategory;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class BlogCategoryController extends Controller
{
    public function index(){
        $table = BlogCategory::orderBy('blogCategoryID', 'DESC')->get();
        return view('blogCategory.blogCategory')->with(['table' => $table]);
    }

    public function save(Request $request){
        $table = new BlogCategory();
        $table->name = $request->name;
        $table->save();

        return redirect()->back()->with(config('custom.save'));
    }
    public function edit(Request $request)
    {
        $table= BlogCategory::find($request->id);
        $table->name = $request->name;
        $table->save();

        return redirect()->back()->with(config('custom.save'));
    }
    public function del($id){
        $table = BlogCategory::find($id);
        $table->delete();

        return redirect()->back()->with(config('custom.del'));
    }

}
