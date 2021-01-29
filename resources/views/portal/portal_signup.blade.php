<!DOCTYPE html>
<html>
<head>
	<title>Sign-Up</title>
		<meta charset="utf-8">
		 <meta name="viewport" content="width=device-width, initial-scale=1">
		 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
		 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
		 <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
		 <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

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
            <a href="{{url('portal_home')}}" class="nav-item nav-link active" style="color: white;"><b>Home</b></a>
            <a href="#" class="nav-item nav-link" style="color: white;"><b>About Us</b></a>
            <a href="#" class="nav-item nav-link" style="color: white;"><b>Contect-us</b></a>
            <div class="nav-item dropdown">
                <!--a href="#" class="nav-link dropdown-toggle float-right" data-toggle="dropdown">Messages</a>
                <div class="dropdown-menu">
                    <a href="#" class="dropdown-item">Inbox</a>
                    <a href="#" class="dropdown-item">Sent</a>
                    <a href="#" class="dropdown-item">Drafts</a>
                </div-->
            </div>
        </div>
        
        <div class="navbar-nav">
            <a href="{{url('portal_login')}}" class="nav-item nav-link" style="color: white;"><b>Login</b></a>
        </div>
    </div>
</nav><br>
	<div class="container py-3 mt-5">
    <div class="row">
        <div class="col-md-12">
            <!--h2 class="text-center mb-5"> Register Sign Up</h2-->
            <div class="row">
                <div class="col-md-6 mx-auto">
                    <div class="card border-secondary">
                        <div class="card-header">
                            <h3 class="mb-0 my-2">Sign Up</h3>
                        </div>
                        <div class="card-body">
                           <form action="{{url('portal/add_new_portal')}}" class="database_opt"> {{ csrf_field() }}
                           	<div class="col-sm-12">
                                <div class="form-group">

						              <label for="Name">Name</label>
						              <input type="text" name="name" class="form-control" required>            

						            </div>
						        </div>

						        
						      <div class="col-sm-12">
						            <div class="form-group">

						              <label for="email">E-Mail</label>
						              <input type="text" name="email" class="form-control" required>            

						            </div>
						        </div>

						        <div class="col-sm-12">
						            <div class="form-group">

						              <label for="mobile_no">Mobile No</label>
						              <input type="text" name="mobile_no" class="form-control" required>            

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

						                <button class="btn btn-primary btn-block" >Sign Up</button>          
						            </div>



                            </form>
                        </div>
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
<script type="text/javascript">
	

$(document).on('submit','.database_opt',function(){

	var url=$(this).attr('action');
	var data=$(this).serialize();
	$.post(url,data,function(fb){
		var resp=$.parseJSON(fb);
		if(resp.status=='true'){

			alert(resp.message);
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