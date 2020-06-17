<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    //
    public function welcome(){
        $users = User::all();
        return view('welcome', compact('users'));
    }

    public function add_user(Request $request){
//        $user = $request->all();
//        print_r($request);
//        exit();
        try {
            User::create(array(
                'name' => $request->name,
                'email'  =>  $request->email,
                'password'  =>  "test",
                'remember_token' =>  $request->token
            ));
        }catch (\Exception $e){
            print_r("Enter New Record in parameters");
            exit();
        }

        $users = User::all();
        return view('welcome', compact('users'));
    }
}
