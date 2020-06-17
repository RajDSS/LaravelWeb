<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    //
    public function welcome(){
        $user = User::find(1);
        return view('welcome', compact('user'));
    }
}
