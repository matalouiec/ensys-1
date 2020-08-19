<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
USE DB;
USE Session;

class ReportController extends Controller
{
   public function report(){

    $reports = DB::table('student_tbl')->get();
    $addressb = DB::table('refbrgy')->pluck('brgyDesc');
    $address = DB::table('refcitymun')->pluck('citymunDesc');
    return view('admin.report', [ 'reports' => $reports, 'address' => $address, 'addressb' => $addressb]);


   }
}
