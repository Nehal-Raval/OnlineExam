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
</head>
<body>
	<div class="container py-5">
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
                           <form action="{{url('portal/add_new_student')}}" class="database_opt"> {{ csrf_field() }}
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
    <!--/row-->
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