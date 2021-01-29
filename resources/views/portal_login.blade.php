<!DOCTYPE html>
<html>
<head>
	<title>Poratl Sign-In</title>
		<meta charset="utf-8">
		 <!--meta name="viewport" content="width=device-width, initial-scale=1">
		 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
		 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
		 <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
		 <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script-->

		 	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
			<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
			<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
			<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
			<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>

		 <style>
			.login-form {
			    width: 340px;
			    margin: 50px auto;
			}
			.login-form form {        
			    margin-bottom: 15px;
			    background: #f7f7f7;
			    box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.3);
			    padding: 30px;
			}
			.login-form h2 {
			    margin: 0 0 15px;
			}
			.form-control, .btn {
			    min-height: 38px;
			    border-radius: 2px;
			}
			.input-group-addon .fa {
			    font-size: 18px;
			}
			.btn {        
			    font-size: 15px;
			    font-weight: bold;
			}
			.bottom-action {
			  	font-size: 14px;
			}
</style>

  <style>
.footer {
  position: fixed;
  left: 0;
  bottom: 0;
  width: 100%;
  color: white;
  text-align: center;
}
</style>
</head>
<body>
		<nav class="navbar navbar-nav navbar-dark bg-alumni navbar-expand-md fixed-top nav-fill bg-primary" >
       <a class="navbar-brand" href="#" style="color: white; font-size: 30px;"><b>
                Online Exam</b>
                     <!--img src="public/Iamages/logo.jpg" style="width:80px; height: 80px;"-->
             </a>
    <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse justify-content-between" id="navbarCollapse">
        <div class="navbar-nav">
            <a href="{{url('stu_home')}}" class="nav-item nav-link active" style="color: white;"><b>Home</b></a>
            <a href="#" class="nav-item nav-link" style="color: white;"><b>About Us</b></a>
            <a href="#" class="nav-item nav-link" style="color: white;"><b>Contect-us</b></a>
            <!--a href="#" class="nav-item nav-link" style="color: white;">Profile</a>
            <!--div class="nav-item dropdown">
                <a href="#" class="nav-link dropdown-toggle float-right" data-toggle="dropdown">Messages</a>
                <div class="dropdown-menu">
                    <a href="#" class="dropdown-item">Inbox</a>
                    <a href="#" class="dropdown-item">Sent</a>
                    <a href="#" class="dropdown-item">Drafts</a>
                </div>
            </div-->
        </div>
        
        <!--div class="navbar-nav">
            <a href="#" class="nav-item nav-link" style="color: white;"><b>Login</b></a>
        </div-->
    </div>
</nav><br><br><br>
	<div class="container py-5">
    <div class="row">
        <div class="col-md-12">
            <!--h2 class="text-center mb-5"> Register Sign Up</h2-->
            <div class="row">
                <div class="col-md-6 mx-auto">
                    <!--div class="card border-secondary">
                        <div class="card-header">
                            <h3 class="mb-0 my-2">Sign In</h3>
                        </div>
                        <div class="card-body">
                           <form action="{{url('portal/login_new_portal')}}" class="database_opt"> {{ csrf_field() }}
                           	

						        
						      <div class="col-sm-12">
						            <div class="form-group">

						              <label for="email">E-Mail</label>
						              <input type="text" name="email" class="form-control" required>            

						            </div>
						        </div>

						       

						     
						        <div class="col-sm-12">
						            <div class="form-group">

						              <label for="password">Password</label>
						              <input type="password" name="password" class="form-control" required>            

						            </div>
						        </div>  

						        <div class="col-sm-12">
						            <div class="form-group">

						                <button class="btn btn-primary btn-block" >Login</button>          
						            </div>
						          </div>	  
						        <div class="col-sm-12">
						            <div class="form-group text-center">
						             OR      
						         </div>
						        </div>   	
						        <div class="col-sm-12">
						            <div class="form-group text-center">

						            <a href="{{url('portal/portal_signup')}}" class="btn btn-primary btn-block">Sign UP</a>        

						            </div>
						        </div>

                            </form>
                        </div>
                    </div!-->
                    <div class="login-form">
						   <form action="{{url('portal/login_new_portal')}}" class="database_opt"> 
						   	{{ csrf_field() }}
						        <h2 class="text-center">Sign In</h2>   
						        <div class="form-group">
						        	<div class="input-group">
						                <div class="input-group-prepend">
						                    <span class="input-group-text">
						                        <span class="fa fa-user"></span>
						                    </span>                    
						                </div>
						                <input type="text" class="form-control" name="email" placeholder="Username" required="required">
						            </div>
						        </div>
								<div class="form-group">
						            <div class="input-group">
						                <div class="input-group-prepend">
						                    <span class="input-group-text">
						                        <i class="fa fa-lock"></i>
						                    </span>                    
						                </div>
						                <input type="password" class="form-control" name="password"placeholder="Password" required="required">
						            </div>
						        </div>        
						        <div class="form-group">
						            <button  class="btn btn-primary btn-block">Log in</button>
						        </div>
						        <div class="bottom-action clearfix">
						            <label class="float-left form-check-label"><input type="checkbox"> Remember me</label>
						            <a href="#" class="float-right">Forgot Password?</a>
						        </div>        
						    </form>
    								<p class="text-center small">Don't have an account! <a href="{{url('portal/portal_signup')}}">Sign up here</a>.</p>
						</div>
                </div>
            </div>
            <!--/row-->

        </div>
        <!--/col-->
    </div>
 <div class="footer bg-primary">
    <p class="mt-2 footerDesk bg-primary">© 2020 All Rights Reserved.Akshay</mark></p>
</div>
</div>
</div>
<script type="text/javascript">
	

$(document).on('submit','.database_opt',function(){

	var url=$(this).attr('action');
	var data=$(this).serialize();
	$.post(url,data,function(fb){
		var resp=$.parseJSON(fb);
		if(resp.status=='true'){

		//	alert(resp.message);
			setTimeout(function(){


				window.location.href=resp.reload;
			});
		}
		else{

				alert(resp.message);
		}
		

	})


	return false;
});

</script>

</body>
</html>