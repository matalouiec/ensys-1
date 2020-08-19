<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;
use Session;
Session_start();

class AllstudentsController extends Controller
{
    public function allstudent(){
        //return view('admin.allstudent');
        $allstudent_info = DB::table('student_tbl')
            ->get();
        $manage_student = view('admin.allstudent')
            ->with('all_student_info',$allstudent_info);
        return view('layout')
            ->with('allstudent',$manage_student);
    }

    // Delete Student

    public function studentdelete($request_id){
        DB::table('student_tbl')
            ->where('student_id',$request_id)
            ->delete();
        return Redirect::to('/allstudent');
    }


    // View student
    public function studentview($student_id){
        $student_description_view = DB::table('student_tbl')
            ->select('*')
            ->where('student_id',$student_id)
            ->first();
//       echo "</pre>";
//       print_r($student_description_view);

        $manage_description_student= view('admin.studentview')
        ->with('student_description_profile',$student_description_view);
        return view('layout')
            ->with('admin.studentview',$manage_description_student);

    }


    // Edit Student

    public function studentedit($student_id){
        $student_description_view = DB::table('student_tbl')
            ->select('*')
            ->where('student_id',$student_id)
            ->first();
//       echo "</pre>";
//       print_r($student_description_view);

        $manage_description_student= view('admin.studentedit')
            ->with('student_description_profile',$student_description_view);
        return view('layout')
            ->with('studentedit',$manage_description_student);

    }

    // Update student heir

    public function studentupdate(Request $request, $student_id){
//        echo "</pre>";
//        print_r($student_id);
$data =array();
$data['student_controlnum'] = $request->student_controlnum;
$data['student_fname'] = $request->student_fname;
$data['student_surname'] = $request->student_surname;
$data['student_midname'] = $request->student_midname;
$data['student_email'] = $request->student_email;
$data['student_mothersname'] = $request->student_mothersname;
$data['student_phone'] = $request->student_phone;
$data['student_addresshouse'] = $request->student_addresshouse;
$data['student_addressstreet'] = $request->student_addressstreet;
$data['student_addressbrgy'] = $request->student_addressbrgy;
$data['student_addressmun'] = $request->student_addressmun;
$data['student_addressprov'] = $request->student_addressprov;
$data['student_addressreg'] = $request->student_addressreg;
$data['student_image'] = $request->student_image;
$data['student_birthdate'] = $request->student_birthdate;
$data['student_birthplace'] = $request->student_birthplace;
$data['student_sex'] = $request->student_sex;
$data['student_religion'] = $request->student_religion;
$data['student_civilstatus'] = $request->student_civilstatus;
$data['student_spouse'] = $request->student_spouse;
$data['student_hifored'] = $request->student_hifored;
$data['student_pwd'] = $request->student_pwd;
$data['student_fourps'] = $request->student_fourps;
$data['student_indige'] = $request->student_indige;
$data['student_govid'] = $request->student_govid;
$data['student_coopmem'] = $request->student_coopmem;
$data['student_household'] = $request->student_household;
$data['student_houserela'] = $request->student_houserela;
$data['student_housememno'] = $request->student_housememno;
$data['student_housemaleno'] = $request->student_housemaleno;
$data['student_housefemaleno'] = $request->student_housefemaleno;
$data['student_incaseofemer'] = $request->student_incaseofemer;
$data['student_incaseno'] = $request->student_incaseno;
$data['student_mainliveli'] = $request->student_mainliveli;
$data['student_farmerstype'] = $request->student_farmerstype;
$data['student_farmworkerskind'] = $request->student_farmworkerskind;
$data['student_fisherfolktype'] = $request->student_fisherfolktype;
$data['student_annualgrossfarm'] = $request->student_annualgrossfarm;
$data['student_annualgrossnonfarm'] = $request->student_annualgrossnonfarm;
$data['student_farmparcels'] = $request->student_farmparcels;
$data['student_agrarianbene'] = $request->student_agrarianbene;
$data['student_farmlocationbrgy'] = $request->student_farmlocationbrgy;
$data['student_farmlocationmun'] = $request->student_farmlocationmun;
$data['student_farmarea'] = $request->student_farmarea;
$data['student_ownerdocno'] = $request->student_ownerdocno;
$data['student_regowner'] = $request->student_regowner;
$data['student_regownerother'] = $request->student_regownerother;
$data['student_tenantname'] = $request->student_tenantname;
$data['student_lessee'] = $request->student_lessee;
$data['student_ricearea'] = $request->student_ricearea;
$data['student_cornarea'] = $request->student_cornarea;
$data['student_vegetablearea'] = $request->student_vegetablearea;
$data['student_fruitarea'] = $request->student_fruitarea;
$data['student_industrialcroparea'] = $request->student_industrialcroparea;
$data['student_poultryarea'] = $request->student_poultryarea;
$data['student_agrifisheryarea'] = $request->student_agrifisheryarea;
$data['student_farmtype'] = $request->student_farmtype;
$data['student_organicprac'] = $request->student_organicprac;

$image = $request->file('student_image');
if ($image){
    $image_name = str_random(20);
    $ext = strtolower($image->getClientOriginalExtension());
    $image_full_name = $image_name.'.'.$ext;
    $upload_path = 'image/';
    $image_url = $upload_path.$image_full_name;
    $success = $image->move($upload_path,$image_full_name);
    if ($success){
        $data['student_image'] = $image_url;
        DB::table('student_tbl')
            ->where('student_id',$student_id)
            ->update($data);
        Session::put('exception','Student Update Successfully ');
        return Redirect::to('/allstudent');
    }
}

        DB::table('student_tbl')
            ->where('student_id',$student_id)
            ->update($data);
        Session::put('exception','Student Update Successfully ');
        return Redirect::to('/allstudent');
    }


}
