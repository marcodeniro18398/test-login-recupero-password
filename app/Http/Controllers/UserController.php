<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    // public function __construct(){
    //     $this->middleware('password.confirm');
    // }
    public function profile(){
        return view('user.profile');
    }
}
