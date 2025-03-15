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
        $items = Contact::Paginate(7);
        return view('admin', compact('items'));
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
}
