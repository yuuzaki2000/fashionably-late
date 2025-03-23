<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;
use App\Http\Requests\ContactRequest;

class ContactController extends Controller
{
    //
    public function index(){
        return view('index');
    }

    public function admin(){
        $contacts = Contact::paginate(7);
        return view('admin', compact('contacts'));
    }

    public function confirm(ContactRequest $request){
        $form = $request->all();
        return view('confirm', compact('form'));
    }

    public function store(Request $request){
        $contact = $request->all();
        Contact::create($contact);
        return redirect('/admin');
    }

    public function search(Request $request){
        $contacts = Contact::where('first_name','like',"'%' . $request->keyword . '%'")->get();
        return view('/admin', compact('contacts'));
    }
}
