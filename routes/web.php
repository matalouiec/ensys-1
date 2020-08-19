<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
// admin logout
Route :: get ('/logout','Admincontroller@logout');
// Student logout
Route :: get ('/student_logout','StudentController@studentlogout');


Route::get('/', function () {
    return view('admin.admin_login');
});
Route::get('/backend', function () {
    return view('admin.admin_login');
});


//Admin Log In........

Route :: post ('/adminlogin','Admincontroller@login_dashboard');
Route :: get ('/admin_dashboard','Admincontroller@admin_dashboard');
Route :: get ('/viewprofile','Admincontroller@viewprofile');

// Admin Profile Setting

Route :: get ('/setting','Admincontroller@setting');

// Student Profile Setting

Route :: get ('/student_setting','StudentController@studentsetting');

Route :: post ('/student_won_update','StudentController@student_won_update');



//Student log in

Route :: post ('/studentlogin','StudentController@student_login_dashboard');
Route :: get ('/student_dashboard','StudentController@student_dashboard');
Route :: get ('/student_profile','StudentController@studentprofile');

//  Student............

Route :: get ('/addstudent','AddstudentsController@addstudent');
Route :: post ('/save_student','AddstudentsController@save_student');
Route :: get ('/allstudent','AllstudentsController@allstudent');
Route :: get ('/student_delete/{student_id}','AllstudentsController@studentdelete');
Route :: get ('/student_view/{student_id}','AllstudentsController@studentview');
Route :: get ('/student_edit/{student_id}','AllstudentsController@studentedit');
Route :: post ('/update_student/{student_id}','AllstudentsController@studentupdate');

// tution fee...........

Route :: get ('/tutionfee','TutionfeeController@tutionfee');

// All Course ...........

Route :: get ('/swe','SWEController@swe');
Route :: get ('/cse','CSEController@cse');
Route :: get ('/bba','BBAController@bba');
Route :: get ('/eee','EEEController@eee');
Route :: get ('/eng','ENGController@eng');

// All teacher........

Route :: get ('/allteacher','AllteacherController@allteacher');
Route :: get ('/addteacher','AllteacherController@addteacher');
Route :: post ('/save_teacher','AllteacherController@saveteacher');



// Report

Route :: get ('/report','ReportController@report');


// Farmland .................
Route :: get ('/addstudent','FarmlandController@farmland');
Route :: post ('/save_farmland','FarmlandController@save_farmland');