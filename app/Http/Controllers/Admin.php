<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Oex_category;
use App\Admin_login;
use App\Oex_exam_master;
use App\Oex_student;
use App\Oex_portal;
use App\Oex_exam_question_master;
use App\User;
use Validator;

class Admin extends Controller
{
    public function admin_login(){


        return view("admin_login");
    }

     public function login_new_admin(Request $request){

        $validator=Validator::make($request->all(),
            ['email'=>'required|email|unique:admin_logins',
            'password'=>'required']);{

                  $login = Admin_login::where('email',$request->email)->where('password',$request->password)->get()->first();

                    if($login){
                        
                            $request->session()->put('name',$login->name);


                            $arr=array('status'=>'true','message'=>'sucess','reload'=>url('admin'));
                        
                        
                    }else{

                        $arr=array('status'=>'false','message'=>'Email And Password Not Found');
                    }

                    echo json_encode($arr);     
                }
            }

      public function logout(Request $request){

        $request->session()->forget('name');

        return redirect(url("admin_login"));
    }




    public function index(){


        $wordlist = Oex_student::get();
        $portal = User::get();
        $exam = Oex_exam_master::get();
        $wordCount['exam_category'] = Oex_category::get()->count();
        $wordCount['exam_question'] = Oex_exam_question_master::get()->count();
        $wordCount['wordCount'] = $wordlist->count();
        $wordCount['portal_count'] = $portal->count();
        $wordCount['exam'] = $exam->count();
        //$wordCount['exam'] = $exam_category->count();

    	return view("admin.dashborad",$wordCount);
    }

    public function exam_category(){

    	$data['category']=Oex_category::orderBy("id","desc")->get();

		return view("admin.exam_category",$data);
    }

    public function add_new_category(Request $request){

    	
    	$validator=Validator::make($request->all(),
            ['name'=>'required|max:255']);

    	if($validator){

    		$cat= new Oex_category();

    		$cat->name=$request->name;


    		
    		$cat->status=1;
    		
    		$cat->save();
    		
    		$arr=array('status'=>'true','message'=>'Successfully inserted Category','reload'=>url('admin/exam_category'));

    	}
    	else{

    		$arr=array('status'=>'false','message'=>$validator->errors()->all());
    	}
    	echo json_encode($arr);
    	
    }

    public function delete_category($id){

    	$cat=Oex_category::where('id',$id)->get()->first();
    	
    	$cat->delete();
    	
    	return redirect(url('admin/exam_category'));
    }

    public function edit_category($id){

    	$cat=Oex_category::where('id',$id)->get()->first();

    	return view("admin.edit_category",['cat'=>$cat]);
    }

    public function edit_new_category(Request $request){

    	$cat=Oex_category::where('id',$request->id)->get()->first();

    	$cat->name=$request->name;
    	
    	$cat->update();
    	
    	echo json_encode(array('status'=>'true','message'=>'successfully Category Updated','reload'=>url('admin/exam_category')));
    }


    public function category_status($id){

    	

		$cat=Oex_category::where('id',$id)->get()->first();

		if($cat->status==1){


			$status=0;
		}else{

			$status=1;
		}
		$cat1=Oex_category::where('id',$id)->get()->first();  

    	$cat1->status=$status;
    	
    	$cat1->update();
					
    }

    public function manage_exam(){

    	$data['category']=Oex_category::orderBy("id","desc")->where('status','1')->get();

    	$data['exams']=Oex_exam_master::select(['oex_exam_masters.*','oex_categories.name as cat_name'])->orderBy('id','desc')->join('oex_categories','oex_exam_masters.category','=','oex_categories.id')->get();

        //$data['exams']=Oex_exam_master::get()->toArray();

    	return view("admin/manage_exam",$data);
    }


     public function manage_new_exeam(Request $request){

    	
    	$validator=Validator::make($request->all(),['title'=>'required','category'=>'required','exam_date'=>'required']);

    	if($validator){

    		$exam= new Oex_exam_master();

    		$exam->title=$request->title;

    		$exam->exam_date=$request->exam_date;

           // $exam->dept = $request->dept;
       
            $exam->category = $request->category;
            
	
    		$exam->status=1;
    		
    		$exam->save();
    		
    		$arr=array('status'=>'true','message'=>'Successfully inserted Exam','reload'=>url('admin/manage_exam'));

    	}
    	else{

    		$arr=array('status'=>'false','message'=>$validator->errors()->all());
    	}
    	echo json_encode($arr);
    	
    }


   

    	public function exam_status($id){


    		$cat=Oex_exam_master::where('id',$id)->get()->first();

		if($cat->status==1){


			$status=0;
		}else{

			$status=1;
		}
		$cat1=Oex_exam_master::where('id',$id)->get()->first();  

    	$cat1->status=$status;
    	
    	$cat1->update();


    	}

    	public function edit_exam($id){

    		$data['exam']=Oex_exam_master::where('id',$id)->get()->first();

    		$data['category']=Oex_category::orderBy("id","desc")->get();


    		return view("admin.edit_exam",$data);

    	}

    	public function edit_new_exam(Request $request){

		    	$cat=Oex_exam_master::where('id',$request->id)->get()->first();

		    	$cat->title=$request->title;

		    	$cat->exam_date=$request->exam_date;

		    	$cat->category=$request->category;
		    	
		    	$cat->update();
		    	
		    	echo json_encode(array('status'=>'true','message'=>'Successfully Exam Updated','reload'=>url('admin/manage_exam')));
    }
        public function delete_exam($id){

             $exam1=Oex_exam_master::where('id',$id)->get()->first();
        
             $exam1 ->delete();
        
            return redirect(url('admin/manage_exam'));

    }

 public function manage_student(){

    $data['exams']=Oex_exam_master::where('status','1')->get()->toArray();
    $data['student']=Oex_student::select(['oex_students.*','oex_exam_masters.title as ex_name','oex_exam_masters.exam_date'])->orderBy('id','desc')->join('oex_exam_masters','oex_students.exam','=','oex_exam_masters.id')->get()->toArray();

    return view("admin.manage_student",$data);
 }

 public function add_new_student(Request $request){



        $validator=Validator::make($request->all(),['name'=>'required','email'=>'required','mobile_no'=>'required','dob'=>'required','exam'=>'required','password'=>'required']);

        if($validator){

            $stu = new Oex_student();

            $stu->name=$request->name;

            $stu->email=$request->email;

            $stu->mobile_no=$request->mobile_no;

            
            $stu->dob=$request->dob;

            $stu->exam=$request->exam;

            // $stu->dept=$request->dept;

            $stu->password=$request->password;            
            
            $stu->status=1;
            
            $stu->save();
            
            $arr=array('status'=>'true','message'=>'Successfully inserted Student','reload'=>url('admin/manage_student'));

        }
        else{

            $arr=array('status'=>'false','message'=>$validator->errors()->all());
        }
        echo json_encode($arr);


        }

 public function student_status($id){

    $stu=Oex_student::where('id',$id)->get()->first();

        if($stu->status==1){


            $status=0;
        }else{

            $status=1;
        }
        $stu=Oex_student::where('id',$id)->get()->first();  

        $stu->status=$status;
        
        $stu->update();


        }

        public function delete_student($id){

            $stu1=Oex_student::where('id',$id)->get()->first();
            
            $stu1->delete();

            return redirect(url('admin/manage_student'));
        }

        public function edit_student($id){

            $stu2=Oex_student::where('id',$id)->get()->first();
            $exams=Oex_exam_master::where('status','1')->get()->toArray();

           return view("admin/edit_student",['student'=>$stu2,'exams'=>$exams]);

        }

    public function edit_new_student(Request $request){

            $stu=Oex_student::where('id',$request->id)->get()->first();

            $stu->name=$request->name;

            $stu->email=$request->email;

            $stu->mobile_no=$request->mobile_no;

            
            $stu->dob=$request->dob;

            $stu->exam=$request->exam;

            $stu->password=$request->password;   
                
                
            $stu->update();
                
                echo json_encode(array('status'=>'true','message'=>'Successfully Student Updated','reload'=>url('admin/manage_student')));   

    }

    public function manage_portal(){

        $data['portal']=User::orderBy('id','desc')->get()->toArray();

        return view("admin/manage_portal",$data);
    }

    public function add_new_portal(Request $request){


        $validator=Validator::make($request->all(),['name'=>'required','email'=>'required','mobile_no'=>'required','password'=>'required']);

        if($validator){

            $portal = new Oex_portal();

            $portal->name=$request->name;

            $portal->email=$request->email;

            $portal->mobile_no=$request->mobile_no;

       
            $portal->password=$request->password;            
            
            $portal->status=1;
            
            $portal->save();
            
            $arr=array('status'=>'true','message'=>'Successfully Inserted Portal','reload'=>url('admin/manage_portal'));

        }
        else{

            $arr=array('status'=>'false','message'=>$validator->errors()->all());
        }
        echo json_encode($arr);



    }
     public function portal_status($id){

        $P=Oex_portal::where('id',$id)->get()->first();

        if($P->status==1){


            $status=0;
        }else{

            $status=1;
        }
        $P=Oex_portal::where('id',$id)->get()->first();  

        $P->status=$status;
        
        $P->update();


        }

        public function delete_portal($id){

            $portal = User::where('id',$id)->get()->first();

            $portal->delete();

            return redirect(url('admin/manage_portal'));

        }

        public function edit_portal($id){

            $data['portal']=Oex_portal::where('id',$id)->get()->first();


            return view("admin/edit_portal",$data);


        }
        public function edit_new_portal(Request $request){

            $portal=Oex_portal::where('id',$request->id)->get()->first();

            $portal->name=$request->name;

            $portal->email=$request->email;

            $portal->mobile_no=$request->mobile_no;        
            
            $portal->status=1; 
                
                
            $portal->update();
                echo json_encode(array('status'=>'true','message'=>'Successfully Portal Updated','reload'=>url('admin/manage_portal')));   


        }

        public function Add_question($id){

             $data['exam'] = Oex_exam_question_master::where('exam_id',$id)->get()->toArray();

            return view("admin/Add_question",$data);

        }

        public function add_new_question(Request $request){


            $validator = Validator::make($request->all(),['question'=>'required','option1'=>'required','option2'=>'required','option3'=>'required','option4'=>'required','ans'=>'required']);

            if($validator->passes()){

                $ques = new  Oex_exam_question_master();

                $ques->exam_id=$request->exam_id;
                $ques->question=$request->question;
               
                $ques->ans=$request->ans;

                $ques ->option = json_encode(array('option1'=>$request->option1,'option2'=>$request->option2,'option3'=>$request->option3,'option4'=>$request->option4));

                $ques->status=1; 

                $ques->save();

                $arr=array('status'=>'true','message'=>'Successfully Add Question','reload'=>url('admin/Add_question/'.$request->exam_id));

            }else{

               $arr=array('status'=>'false','message'=>$validator->errors()->all());
            }
              echo json_encode($arr);
        }

        public function delete_exam_ques($id){

            $ques = Oex_exam_question_master::where('id',$id)->get()->first();
            $exam_id = $ques->exam_id;
            $ques ->delete();

            return redirect(url('admin/Add_question/'.$exam_id));

        }

        public function edit_exam_ques($id){

             $data['question'] =  Oex_exam_question_master::where('id',$id)->get()->toArray();
             
             return view("admin/edit_exam_ques",$data); 

        }

         public function update_new_question(Request $request){

            $question=Oex_exam_question_master::where('id',$request->id)->get()->first();

            //print_r($ques);

            //$ques->exam_id=$request->exam_id;
            $question->question=$request->question;  
            $question->ans=$request->ans;
            // $exam_id = $ques->exam_id;  
            $question ->option = json_encode(array('option1'=>$request->option1,'option2'=>$request->option2,'option3'=>$request->option3,'option4'=>$request->option4));
  
            $question->update();
                
                echo json_encode(array('status'=>'true','message'=>'Successfully Exam Updated','reload'=>url('admin/Add_question/'.$question->exam_id)));   

    }


         public function question_status($id){

            $question=Oex_exam_question_master::where('id',$id)->get()->first();

            if($question->status==1){


                $status=0;
            }else{

                $status=1;
            }
            $question=Oex_exam_question_master::where('id',$id)->get()->first();  

            $question->status=$status;
            
            $question->update();


        }

       


}
