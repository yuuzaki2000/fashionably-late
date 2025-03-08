<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;
use App\Models\User;
use App\Http\Requests\RegisterRequest;
use App\Http\Requests\LoginRequest;


class AuthController extends Controller
{
    //
    public function index(){
        return view('index');
    }

    /* ユーザーが、loginメソッドやregisterメソッドは定義する必要はない。*/

    public function admin(){
        $items = Contact::Paginate(7);
        return view('admin', compact('items'));
    }

    public function register(RegisterRequest $request){
        $form = $request->all();
        User::create($form);
        return redirect('/login');
    }

    public function login(LoginRequest $request){
        $form = $request->all();
        User::create($form);
        return redirect('/login');
    }
}
