<?php

namespace App\Http\Controllers\Blog;
use App\BlogCategory;
use App\Blog;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class UserBlogController extends Controller
{
    public function index(Request $request){
        $s = $request->input('s');
        $blogCat = BlogCategory::orderBy('blogCategoryID', 'DESC')->get();
        $table = Blog::orderBy('blogCategoryID', 'DESC')->search($s)->paginate(9);
        return view('userPanel.blog.blog')->with(['table'=>$table,'blogCat'=>$blogCat,'s'=>$s]);
    }
}
