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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get("admin_login","Admin@admin_login");

Route::post("login_new_admin","Admin@login_new_admin");


Route::get("admin","Admin@index");

Route::get("admin/exam_category","Admin@exam_category");

Route::post("admin/add_new_category","Admin@add_new_category");

Route::get("admin/delete_category/{id}","Admin@delete_category");

Route::get("admin/edit_category/{id}","Admin@edit_category");

Route::post("admin/edit_new_category","Admin@edit_new_category");

Route::get("admin/category_status/{id}","Admin@category_status");

Route::get("admin/manage_exam","Admin@manage_exam");

Route::post("admin/manage_new_exeam","Admin@manage_new_exeam");

Route::get("admin/delete_exam/{id}","Admin@delete_exam");

Route::get("admin/exam_status/{id}","Admin@exam_status");

Route::get("admin/edit_exam/{id}","Admin@edit_exam");

Route::post("admin/edit_new_exam","Admin@edit_new_exam");

Route::get("admin/manage_student","Admin@manage_student");

Route::post("admin/add_new_student","Admin@add_new_student");

Route::get("admin/student_status/{id}","Admin@student_status");

Route::get("admin/delete_student/{id}","Admin@delete_student");

Route::get("admin/edit_student/{id}","Admin@edit_student");

Route::post("admin/edit_new_student","Admin@edit_new_student");

Route::get("admin/manage_portal","Admin@manage_portal");

Route::post("admin/add_new_portal","Admin@add_new_portal");

Route::get("admin/portal_status/{id}","Admin@portal_status");

Route::get("admin/delete_portal/{id}","Admin@delete_portal");

Route::get("admin/edit_portal/{id}","Admin@edit_portal");

Route::post("admin/edit_new_portal","Admin@edit_new_portal");

Route::get("admin/Add_question/{id}","Admin@Add_question");

Route::post("admin/add_new_question","Admin@add_new_question");

Route::get("admin/delete_exam_ques/{id}","Admin@delete_exam_ques");

Route::get("admin/edit_exam_ques/{id}","Admin@edit_exam_ques");

Route::post("admin/update_new_question","Admin@update_new_question");

Route::get("admin/question_status/{id}","Admin@question_status");

Route::get("admin/logout","Admin@logout");






// Portal Routeing

Route::get("portal_home","Portalcontroller@portal_home");

Route::get("portal/portal_signup","Portalcontroller@portal_signup");

Route::post("portal/add_new_portal","Portalcontroller@add_new_portal");

Route::get("portal_login","Portalcontroller@portal_login");

Route::post("portal/login_new_portal","Portalcontroller@login_new_portal");

Route::get("portal/dashborad","portaloperation@dashborad");

Route::get("portal/exam_form/{id}","portaloperation@exam_form");

Route::post("portal/add_exam_form","portaloperation@add_exam_form");

Route::get("portal/printt/{id}","portaloperation@printt");

Route::get("portal/update_form","portaloperation@update_form");

Route::get("portal/Student_exam_info","portaloperation@Student_exam_info");

Route::post("portal/edit_exam_form","portaloperation@edit_exam_form");

Route::get("portal/logout","portaloperation@logout");

Route::get("stu_home","portaloperation@stu_home");




// Student Routeing



Route::get("stu_login","Studentcontroller@stu_login");

Route::post("student/login_new_student","Studentcontroller@login_new_student");

Route::get("student/about","Studentcontroller@about");

Route::get("student/contectus","Studentcontroller@contectus");

Route::get("student/schedule","Studentoperation@schedule");

Route::get("student/logout","Studentoperation@logout");

Route::get("student/exam","Studentoperation@exam");

Route::get("student/Join_exam/{id}","Studentoperation@Join_exam");

Route::post("student/submit_question","Studentoperation@submit_question");

Route::get("student/show_result/{id}","Studentoperation@show_result");

Route::get("student/result","Studentoperation@result");

