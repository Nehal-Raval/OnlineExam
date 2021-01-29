<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Oex_portal;
use Session;
use Validator;


class Portalcontroller extends Controller
{
    public function portal_signup(){


    	if(Session::get('portal_session')){

    		return redirect(url('portal/dashborad'));
    	}

    	return view("portal.portal_signup");
    }

    public function add_new_portal(Request $request){



        $validator=Validator::make($request->all(),['name'=>'required','email'=>'required','mobile_no'=>'required','password'=>'required']);

        if($validator){

        	$is_set=Oex_portal::where('email',$request->email)->get()->toArray();

        	if($is_set){

        		$arr=array('status'=>'false','message'=>'Email Already Exists');
        	}else{

        	$portal = new Oex_portal();

            $portal->name=$request->name;

            $portal->email=$request->email;

            $portal->mobile_no=$request->mobile_no;

       
            $portal->password=$request->password;            
            
            $portal->status=1;
            
            $portal->save();
            
            $arr=array('status'=>'true','message'=>'Successfully Registration Portal','reload'=>url('portal_login'));

        	}
        }	
        else{

            $arr=array('status'=>'false','message'=>$validator->errors()->all());
        }

        	
            
        echo json_encode($arr);

    }

    public function portal_login(){


    	if(Session::get('portal_session')){

    		return redirect(url('portal/dashborad'));
    	}


    	return view("portal_login");
    }

    public function login_new_portal(Request $request){

    	$login = Oex_portal::where('email',$request->email)->where('password',$request->password)->get()->toArray();

    	if($login){


    		if($login[0]['status']==1){

    			$request->session()->put('portal_session',$login[0]['id']);
                $request->session()->put('name',$login[0]['name']);

    			$arr=array('status'=>'true','message'=>'status Activeted','reload'=>url('portal/dashborad'));
    		}
    		else{

    			$arr=array('status'=>'false','message'=>'status Deactivated','reload'=>url('portal/dashborad'));

    		}
    	}else{

    		$arr=array('status'=>'false','message'=>'Email And Password Not Found');
    	}

    	echo json_encode($arr);		
    }

    public function portal_home(){

        return view("portal_home");
    }
}
