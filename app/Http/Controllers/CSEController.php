<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
USE DB;

class CSEController extends Controller
{
    public function cse(){


            $allcse_info = DB::table('student_tbl')
                ->where(['student_department'=>2])
                ->get();
//             echo "</pre>";
//            print_r($allstudent_info);

        $manage_student = view('admin.cse')
               ->with('all_cse_info',$allcse_info);
           return view('layout')
               ->with('cse',$manage_student);

    }
}
