<?php

namespace App\Http\Controllers\Contact;
use App\Contact;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ContactController extends Controller
{
    public function index(){
        $table = Contact::orderBy('contactID', 'DESC')->get();
        return view('contact.contact')->with(['table' => $table]);
    }



    //This is for admin section
    public function admin_contact(){
        $table = Contact::orderBy('contactID', 'DESC')->get();
        return view('admin.contact.contact')->with(['table' => $table]);
    }

    public function massage_details($id){
        $mayMassage = Contact::find($id);
        session([
            'contactID' => $mayMassage->contactID
        ]);
        $contactMassage = Contact::where('contactID',session('contactID'))->get();
        $table = Contact::orderBy('contactID', 'DESC')->get();
        return view('admin.contact.massageDetails')->with(['table' => $table,'contactMassage'=>$contactMassage]);
    }
}
