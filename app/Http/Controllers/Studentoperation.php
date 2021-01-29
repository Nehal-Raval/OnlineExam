<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Oex_student;
use App\Oex_exam_question_master;
use App\model\Oex_result;
use App\Oex_exam_master;
use App\Oex_category;
use Session;


class Studentoperation extends Controller
{
    public function schedule(){


    	if(!Session()->get('id')){

    		return redirect(url('stu_login'));
    	}
    	//$data['data'] = Session()->get('name');
        //$data['data'] = Session()->get('id');

        $data['schedule'] = Oex_exam_master::select(['oex_exam_masters.*','oex_categories.name'])->join('oex_categories','oex_exam_masters.category','=','oex_categories.id')->orderBy('id','desc')->get();



    	return view("student/schedule",$data);
    }

    public function logout(Request $request){


    	$request->Session()->forget('id');

    	return redirect(url('stu_login'));
    }

    public function exam(){

   // $data['student_info'] = Oex_student::where('id',Session::get('id'))->get()->toArray();

    	$data['student_info'] = Oex_student::select(['oex_students.*','oex_exam_masters.title','oex_exam_masters.exam_date','oex_exam_masters.dept'])->join('oex_exam_masters','oex_students.exam','=','oex_exam_masters.id')->where('oex_students.id',Session::get('id'))->get();    
       /*echo "<pre>";
        print_r($data);
        die();*/
    	return view("student/exam",$data);
    }

    public function Join_exam($id){

        $data['question'] = Oex_exam_question_master::where('exam_id',$id)->get()->toArray();
      

    	return view("student/Join_exam",$data);
    }

    public function submit_question(Request $request){
        //echo "<pre>";
        $yes_ans=0;
        $no_ans=0;
        $total=0;
        $data = $request->all();
        $result = array();
        for($i=1;$i<=$request->index;$i++){

            if(isset($data['question'.$i])){

                $question = Oex_exam_question_master::where('id',$data['question'.$i])->get()->first();

                if($question->ans==$data['ans'.$i]){

                    $result[$data['question'.$i]]='YES';
                    $yes_ans++;
                }else{

                     $result[$data['question'.$i]]='NO';
                     $no_ans++;
                } 
                $total_question =  $yes_ans+ $no_ans; 
            }

         }
    
     
       
       $res = new Oex_result();

       $res->exam_id=$request->exam_id;
       $res->user_id=Session::get('id');
       $res->yes_ans=$yes_ans;
       $res->no_ans=$no_ans;
       $res->total_question= $total_question;
       $res->result_json=json_encode($result);

       echo $res->save();

      return redirect(url("student/show_result/".$res->id)); 

    }
    public function show_result($id){

        $data['result_info'] = Oex_result::where('id',$id)->get()->first();
      
        return view("student/show_result",$data);
    }

    public function result(){

        $data['student_info'] = Oex_student::select(['oex_students.*','oex_exam_masters.title','oex_exam_masters.exam_date'])->join('oex_exam_masters','oex_students.exam','=','oex_exam_masters.id')->where('oex_students.id',Session::get('id'))->get();  

          $data['result_info'] = Oex_student::select(['oex_students.*','oex_results.yes_ans','oex_results.no_ans','oex_results.total_question'])->join('oex_results','oex_students.id','=','oex_results.user_id')->where('oex_students.id',Session::get('id'))->get();  

        return view("student/result",$data);
    }
}



//