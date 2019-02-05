<?php

namespace App\Http\Controllers\Blog;

use App\Blog;
use App\BlogCategory;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class SingleBlogController extends Controller
{
    public function index($id){

        $table = Blog::find($id);

        session([
            'blogID' => $table->blogID,
            'blogTitle' => $table->title
        ]);
        $blogcat = BlogCategory::orderBy('blogCategoryID', 'DESC')->get();
        $table = Blog::where('blogID', session('blogID'))->get();
        return view('userPanel.blog.singleBlog')->with(['blogcat'=>$blogcat,'table'=>$table]);
    }
}
