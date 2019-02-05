<?php

namespace App\Http\Controllers\History;
use App\History;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class HistoryController extends Controller
{
    public function index(){
        $history = History::orderBy('historyID', 'DESC')->get();
        return view('history.history')->with(['history' => $history]);
    }

    public function save(Request $request){
        $table = new History();
        $table->description = $request->description;
        $table->title = $request->title;
        $table->save();

        $insertID = $table->historyID;
        if(isset($request->historyImg)){
            $imageName = $insertID.'.jpg';

            $request->historyImg->move(public_path('image/historyImg/'), $imageName);
        }

        return redirect()->back()->with(config('custom.save'));
    }
    public function edit(Request $request)
    {
        $table= History::find($request->id);
        $table->description = $request->description;
        $table->title = $request->title;
        $table->save();
        $insertID = $table->historyID;
        if(isset($request->historyImg)){
            $imageName = $insertID.'.jpg';

            $request->historyImg->move(public_path('image/historyImg/'), $imageName);
        }

        return redirect()->back()->with(config('custom.edit'));
    }
    public function del($id){
        $table = History::find($id);
        $table->delete();

        return redirect()->back()->with(config('custom.del'));
    }

    public function userhistory(){
        $table = History::orderBy('historyID', 'DESC')->get();
        return view('userPanel.history.history')->with(['table' => $table]);
    }
}
