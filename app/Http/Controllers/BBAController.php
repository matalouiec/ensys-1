<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
USE DB;

class BBAController extends Controller
{
    public function bba(){
        $allswe_info = DB::table('student_tbl')
            ->where(['student_department'=>3])
            ->get();
//             echo "</pre>";
//            print_r($allstudent_info);

        $manage_student = view('admin.bba')
            ->with('all_bba_info',$allswe_info);
        return view('layout')
            ->with('bba',$manage_student);
    }
}
