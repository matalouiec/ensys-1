<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
USE DB;

class ENGController extends Controller
{
    public function eng(){
        $allswe_info = DB::table('student_tbl')
            ->where(['student_department'=>5])
            ->get();
//             echo "</pre>";
//            print_r($allstudent_info);

        $manage_student = view('admin.eng')
            ->with('all_eng_info',$allswe_info);
        return view('layout')
            ->with('eng',$manage_student);
    }
}
