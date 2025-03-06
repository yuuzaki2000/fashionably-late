<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    //
    public function index(){
        return view('index');
    }

    /* ユーザーが、loginメソッドやregisterメソッドは定義する必要はない。*/
}
