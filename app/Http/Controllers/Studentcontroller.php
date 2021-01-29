<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Oex_student;
use App\Oex_exam_question_master;
use Session;
use Validator;

class Studentcontroller extends Controller
{
    public function stu_login(){

    	return view("stu_login");
    }

    


    public function login_new_student(Request $request){

    	$login = Oex_student::where('email',$request->email)->where('password',$request->password)->get()->first();

    	if($login){
    		
    			$request->session()->put('id',$login->id);
                $request->session()->put('name',$login->name);

    			$arr=array('status'=>'true','message'=>'sucess','reload'=>url('student/schedule'));
    		
    		
    	}else{

    		$arr=array('status'=>'false','message'=>'Email And Password Not Found');
    	}

    	echo json_encode($arr);		
    }

  public function about(){

    return view("student/about");
  }

  public function contectus(){

    return view("student/contectus");

  }

}