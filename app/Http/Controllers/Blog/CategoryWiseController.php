<?php

namespace App\Http\Controllers\Blog;

use App\Blog;
use App\BlogCategory;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CategoryWiseController extends Controller
{
    public function index($id){

        $table = BlogCategory::find($id);

        session([
            'categoryID' => $table->blogCategoryID,
            'categoryName' => $table->name
        ]);
        $blogcat = BlogCategory::orderBy('blogCategoryID', 'DESC')->get();
        $table = Blog::where('blogCategoryID', session('categoryID'))->orderBy('blogID', 'DESC')->get();
        return view('userPanel.blog.categoryWiseblog')->with(['blogcat'=>$blogcat,'table'=>$table]);
    }
}
