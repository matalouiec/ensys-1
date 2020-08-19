<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
USE DB;

class SWEController extends Controller
{
    public function swe(){

        $allswe_info = DB::table('student_tbl')
            ->where(['student_department'=>1])
            ->get();
//             echo "</pre>";
//            print_r($allstudent_info);

        $manage_student = view('admin.swe')
            ->with('all_swe_info',$allswe_info);
        return view('layout')
            ->with('swe',$manage_student);

    }
}
