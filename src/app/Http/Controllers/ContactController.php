<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;

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

    public function confirm(Request $request){
        $contact = $request->only(['category_id','first_name', 'last_name', 'gender', 'email', 'tel', 'address', 'building', 'content', 'detail']);
        return view('confirm', compact('contact'));
    }

    public function store(Request $request){
        $contact = $request->only(['first_name', 'last_name', 'gender', 'email', 'tel', 'address', 'building', 'detail']);
        Contact::create($contact);
        return redirect('/admin');
    }
}
