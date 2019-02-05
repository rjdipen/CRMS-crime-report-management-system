<?php

namespace App\Http\Controllers\CrimeType;
use App\CrimeType;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CrimeTypeController extends Controller
{
    public function index(){
        $table = CrimeType::orderBy('CrimeTypeID', 'DESC')->get();
        return view('crimeType.crimeType')->with(['table' => $table]);
    }

    public function save(Request $request){
        $table = new CrimeType();
        $table->name = $request->name;
        $table->save();

        return redirect()->back()->with(config('custom.save'));
    }
    public function edit(Request $request)
    {
        $table= CrimeType::find($request->id);
        $table->name = $request->name;
        $table->save();

        return redirect()->back()->with(config('custom.save'));
    }
    public function del($id){
        $table = CrimeType::find($id);
        $table->delete();

        return redirect()->back()->with(config('custom.del'));
    }
}
