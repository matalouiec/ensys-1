<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Farmland;
use App\Student;
use Illuminate\Support\Facades\Redirect;
USE DB;
USE Session;

class FarmlandController extends Controller
{
    //Adding Farmland
    public function farmland()
    {
        $addressb = DB::table('refbrgy')->pluck('brgyDesc');
        $address = DB::table('refcitymun')->pluck('citymunDesc');
        $students = DB::table('student_tbl')->get();
        return view('admin.addstudent', compact('students'))->with([ 'address' => $address, 'addressb' => $addressb]);
    }

    public function save_farmland(Request $request)
    {



        $data =array();
        $data['student_id'] = $request->student_id;
        $data['brgy'] = $request->brgy;
        $data['mun'] = $request->mun;
        $data['ownerdocno'] = $request->ownerdocno;
        $data['regisowner'] = $request->regisowner;
        $data['tenant'] = $request->tenant;
        $data['lessee'] = $request->lessee;
        $data['other'] = $request->other;
        $data['rice_area'] = $request->rice_area;
        $data['farm_type'] = $request->farm_type;
        $data['corn_area'] = $request->corn_area;
        $data['vegetable_area'] = $request->vegetable_area;
        $data['fruit_area'] = $request->fruit_area;
        $data['industrialcrop_area'] = $request->industrialcrop_area;
        $data['poultry_area'] = $request->poultry_area;
        $data['agrifishery_area'] = $request->agrifishery_area;
        $data['total_area'] = $request->total_area;
        $data['orgaprac'] = $request->orgaprac;


        DB::table('farmlands')->insert($data);
        Session::put('exception','Farmland Added Successfully ');
        return Redirect::to('/addstudent');
    }



}
