<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Session;
use App\Oex_exam_master;
use App\Oex_student;
use Validator;

class portaloperation extends Controller
{
    public function dashborad(){

    	/*if(!Session::get('portal_session')){

    		return redirect(url('portal_login'));
    	}*/

    	//echo $session_data = Session::get('portal_session');

    	$data['portal']=Oex_exam_master::select(['Oex_exam_masters.*','oex_categories.name as cat_name'])->join('oex_categories','Oex_exam_masters.category','=','oex_categories.id')->orderBy('id','desc')->where('Oex_exam_masters.status','1')->get()->toArray();

    		return view("portal/dashborad",$data);
    }

    public function exam_form($id){

    	$data['id']=$id;
    	$info = Oex_exam_master::where('id',$id)->get()->first();
    	$data['exam_title'] = $info->title;
    	$data['exam_date'] = $info->exam_date;

    	return view("portal/exam_form",$data);
    }

    public function add_exam_form(Request $request){
	

        $validator=Validator::make($request->all(),['name'=>'required','email'=>'required','mobile_no'=>'required','dob'=>'required','password'=>'required']);

        if($validator){
            
            $is_set=Oex_student::where('email',$request->email)->get()->toArray();

            if($is_set){

                $arr=array('status'=>'false','message'=>'Email Already Exists');
            }else{

            $stu = new Oex_student();

            $stu->name=$request->name;

            $stu->email=$request->email;

            $stu->mobile_no=$request->mobile_no;

            
            $stu->dob=$request->dob;

            $stu->exam=$request->id;

            $stu->password=$request->password;            
            
            $stu->status=1;
            
            $stu->save();
            
            $arr=array('status'=>'true','message'=>'Successfully inserted Student','reload'=>url('portal/printt/'.$stu->id));
            }
        }
        else{

            $arr=array('status'=>'false','message'=>$validator->errors()->all());
        }
        echo json_encode($arr);


    }

   public function printt($id){

    	$stu = Oex_student::where('id',$id)->get()->first();
    	$exam_info = Oex_exam_master::where('id',$stu->exam)->get()->first();
    	$exam_title = $exam_info->title;
    	$exam_date = $exam_info->exam_date;
    	return view("portal/printt",['stu'=>$stu,'exam_title'=>$exam_title,'exam_date'=>$exam_date]);
    }

    public function update_form(){

		$data['exam_date'] = Oex_exam_master::where('status','1')->get()->toArray();    	

    	return view("portal/update_form",$data);
    }

    public function Student_exam_info(){

        

    		$data['exams']=Oex_exam_master::where('id',$_GET['exam'])->get()->first();

     		$store =$data['student_info']= Oex_student::where('mobile_no',$_GET['mobile_no'])->where('dob',$_GET['dob'])->where('exam',$_GET['exam'])->get()->toArray();
            
          /*  echo "<pre>";
            print_r($data);
            die();*/  
            if($store){
                return view('portal.Student_exam_info',$data);
            }
            else{

                
                //return redirect(url('/portal/update_form')); 
               // return '<script>alert("Wrong Data");</script>';  
               return redirect()->back() ->with('alert', 'Updated!');
            }  		
            
    }

    public function edit_exam_form(Request $request){


        $stu=Oex_student::where('id',$request->id)->get()->first();

            $stu->name=$request->name;

            $stu->email=$request->email;

            $stu->mobile_no=$request->mobile_no;

            
            $stu->dob=$request->dob;

           // $stu->exam=$request->exam;

            $stu->password=$request->password;   
                
                
            $stu->update();
                
                echo json_encode(array('status'=>'true','message'=>'Successfully Student Updated','reload'=>url('portal/update_form')));         

    }

    public function logout(Request $request){

        $request->session()->forget('portal_session');

        return redirect(url("portal_login"));
    }

      public function stu_home(){

        return view("stu_home");
    }



 }
