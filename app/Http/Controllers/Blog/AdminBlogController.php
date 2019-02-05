<?php

namespace App\Http\Controllers\Blog;
use App\BlogCategory;
use App\Blog;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class AdminBlogController extends Controller
{
    public function index(){
        $blogCat = BlogCategory::orderBy('blogCategoryID', 'DESC')->get();
        $blogPosts = Blog::where('id', Auth::user()->id)->get();;
        return view('blog.blogs')->with(['blogCat'=>$blogCat,'blogPosts'=>$blogPosts]);
    }
    public function save(Request $request){
        $table = new Blog();
        $table->blogCategoryID = $request->blogCategoryID;
        $table->title = $request->title;
        $table->description = $request->description;
        $table->tag = $request->tag;
        $table->save();

        $insertID = $table->blogID;

        if (isset($request->postImg)) {
            $imageName = $insertID . '.jpg';

            $request->postImg->move(public_path('image/blogImg/'), $imageName);
        }
        return redirect()->back()->with(config('custom.save'));
    }
    public function edit(Request $request){
        $table= Blog::find($request->id);

        $table->blogCategoryID = $request->blogCategoryID;
        $table->title = $request->title;
        $table->description = $request->description;
        $table->tag = $request->tag;

        $table->save();

        return redirect()->back()->with(config('custom.edit'));
    }
    public function del($id){
        $table = Blog::find($id);
        $table->delete();
        return back()->with(config('custom.del'));
    }
}
