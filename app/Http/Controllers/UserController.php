<?php

namespace App\Http\Controllers;

use App\Contact;
use App\Blog;
use App\MissingGoods;
use App\MissingPerson;
use App\MostWanted;
use Illuminate\Http\Request;

class UserController extends Controller
{

    public function index(){
        $table = MissingGoods::where('status','Running')->orderBy('missingGoodsID', 'DESC')->paginate(4); //show all running goods in goods page
        $missingPerson = MissingPerson::where('status','Running')->orderBy('missingPersonID', 'DESC')->paginate(4); //show all running goods in goods page
        $mostWanted = MostWanted::where('status','Running')->orderBy('mostWantedID', 'DESC')->paginate(4); //show all running goods in goods page
        $blog = Blog::orderBy('blogID', 'DESC')->paginate(2); //show all blog in home  page
        return view('user')->with(['table' => $table,'blog' => $blog,'missingPerson' => $missingPerson,'mostWanted' => $mostWanted]);
    }

    public function save(Request $request){
        $table = new Contact();
        $table->name = $request->name;
        $table->email = $request->email;
        $table->massage = $request->massage;
        $table->save();
        return redirect()->back()->with(config('custom.save'));
    }
}
