<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
USE DB;
USE Session;
Session_start();

class AllteacherController extends Controller
{

    public function addteacher(){
        return view('admin.addteacher');
    }

    // Insert Teacher Date

    public function saveteacher(Request $request){
        $data =array();
        $data['teacher_name'] = $request->teacher_name;
        $data['teacher_email'] = $request->teacher_email;
        $data['teacher_password'] = md5($request->teacher_password);
        $data['teacher_phone'] = $request->teacher_phone;
        $data['teacher_address'] = $request->teacher_address;
        $data['teacher_department'] = $request->teacher_department;
// Image work
        $image = $request->file('teacher_image');
        if ($image){
            $image_name = str_random(20);
            $ext = strtolower($image->getClientOriginalExtension());
            $image_full_name = $image_name.'.'.$ext;
            $upload_path = 'image/';
            $image_url = $upload_path.$image_full_name;
            $success = $image->move($upload_path,$image_full_name);
            if ($success){
                $data['teacher_image'] = $image_url;

                DB::table('teachers_tbl')->insert($data);
                Session::put('exception','Teacher Added Successfully ');
                return Redirect::to('/addteacher');
            }
        }
        $data['image']= $image_url;
        DB::table('teachers_tbl')->insert($data);
        Session::put('exception','Teacher Added Successfully ');
        return Redirect::to('/addteacher');

        DB::table('teachers_tbl')->insert($data);
        Session::put('exception','Teacher Added Successfully ');
        return Redirect::to('/addteacher');


    }

    // Show All Teacher List

    public function allteacher(){
        //return view('admin.allstudent');
        $allteacher_info = DB::table('teachers_tbl')
            ->get();
        $manage_teacher = view('admin.allteacher')
            ->with('all_teacher_info',$allteacher_info);
        return view('layout')
            ->with('allteacher',$manage_teacher);
    }
}
