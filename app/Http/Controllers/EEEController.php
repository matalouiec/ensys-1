<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
USE DB;

class EEEController extends Controller
{
    public function eee(){
        $allswe_info = DB::table('student_tbl')
            ->where(['student_department'=>4])
            ->get();
//             echo "</pre>";
//            print_r($allstudent_info);

        $manage_student = view('admin.eee')
            ->with('all_eee_info',$allswe_info);
        return view('layout')
            ->with('eee',$manage_student);
    }
}
