<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
USE DB;

use Illuminate\Support\Facades\Redirect;
use Session;
session_start();

class StudentController extends Controller
{
    // Student log in part

    public function student_dashboard(){
        return view('student.dashboard');
    }

    // Student Logout  part

    public function studentlogout(){
//        Session:: put ('student_fname',null);
//        Session:: put ('student_id',null);
        return Redirect::to('/');
    }

    // Student Dashboard Part
    public function student_login_dashboard(Request $request)
    {
//        dd($request->all());
//        echo 'yes';
//        exit();
        //return view('admin.dashboard');
        $email = $request->student_email;
        $password= md5($request->student_password);
        //echo $password; exit();

        $result = DB::table('student_tbl')
            ->where('student_email',$email)
            ->where ('student_password',$password)
            ->first();
//          echo "</pre>";
//        print_r($result);

        if($result){
            Session::put('student_email',$result->student_email);
           Session::put('student_id',$result->student_id);

//           echo 'yes';
//           exit();
            return Redirect::to('/student_dashboard');


        }
        else{
            Session::put('exception','Email or Password Invalid');
            return Redirect::to('/');
        }

    }

    // Student view part


        public function studentprofile(){
        $student_id = Session::get('student_id');
            $student_profile_view = DB::table('student_tbl')
                ->select('*')
                ->where('student_id',$student_id)
                ->first();
//       echo "</pre>";
//       print_r($student_description_view);

            $manage__student_profile= view('student.studentview')
                ->with('student__profile',$student_profile_view);
            return view('student_layout')
                ->with('studentview',$manage__student_profile);


       }

    // Student Setting Edit your profile

    public function studentsetting(){
        $student_id = Session::get('student_id');
        $student_description_view = DB::table('student_tbl')
            ->select('*')
            ->where('student_id',$student_id)
            ->first();
//       echo "</pre>";
//       print_r($student_description_view);

        $manage_description_student= view('student.studentsetting')
            ->with('student_description_profile',$student_description_view);
        return view('student_layout')
            ->with('studentsetting',$manage_description_student);

    }

    //Student own Updata seting

    public  function  student_won_update(Request $request){
        $student_id = Session::get('student_id');
        $data =array();

        $data['student_fname'] = $request->student_fname;

        $data['student_surname'] = $request->student_surname;


        $data['student_password'] = md5($request->student_password);
        $data['student_phone'] = $request->student_phone;


        DB::table('student_tbl')
            ->where('student_id',$student_id)
            ->update($data);
        Session::put('exception','Student Update Successfully ');
        return Redirect::to('/student_setting');
    }



}
