<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\Session\Session;
use Illuminate\Http\Request;
USE DB;

use Illuminate\Support\Facades\Redirect;
//use Session;
//session_start();





class Admincontroller extends Controller
{
    // Admin part

public function admin_dashboard(){
    return view('admin.dashboard');
}

// view profile part
public function viewprofile(){
    return view('admin.view');
}

// Setting your profile

public function setting(){
    return view('admin.setting');
}

// admin Logout part

public function logout(){
    return Redirect::to('/backend');
}


// Dashboard Part
    public function login_dashboard(Request $request)
    {
        //return view('admin.dashboard');
        $email = $request->admin_email;
        $password= md5($request->admin_pass);
        $result = DB::table('admin_tbl')
            ->where('admin_email',$email)
            ->where ('admin_pass',$password)
            ->first();
//        echo "</pre>";
//        print_r($result);

        if($result){
           // Session::put('admin_email',$result->admin_email);
            //Session::put('admin_id',$result->admin_id);

         return Redirect::to('/admin_dashboard');


        }
        else{
           // Session::put('exception','Email or Password Invalid');
            return Redirect::to('/backend');
        }

    }



}
