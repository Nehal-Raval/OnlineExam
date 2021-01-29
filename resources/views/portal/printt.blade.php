 <html lang="en">
<head>
  <title>Exam Form</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>


     <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
          
            <div class="card">
              <div class="card-header">
                
                
      <div class="card-body">
      			<h3 class="text-center"><b><?php echo $exam_title; ?></b></h3><br>
      			<h3 class="text-center"><b><?php echo date('d M,Y',strtotime($exam_date)); ?></b></h3><br>

			       <form>
					   <div class="form-group">
					      <label class="control-label col-sm-8 text-center" for="Name">Name:</label>
					      <label class="control-label col-sm-0 text-center" for="Name"><?php echo $stu['name']; ?></label>
					      
					    </div>
					  
					    <div class="form-group">
					      <label class="control-label col-sm-8 text-center" for="email">E-mail:</label>
					      <label class="control-label col-sm-0 text-center" for="email"><?php echo $stu['email']?></label>
					    </div>
						<div class="form-group">
					      <label class="control-label col-sm-8 text-center" for="mobile_no">Mobile No:</label>
					      <label class="control-label col-sm-0 text-center" for="mobile_no"><?php echo $stu['mobile_no']?></label>
					    </div>
					    <div class="form-group">
					      <label class="control-label col-sm-8 text-center" for="dob">Date Of Birth:</label>
					      <label class="control-label col-sm-0 text-center" for="email"><?php echo date('d M,Y',strtotime($stu['dob']))?></label>
					    </div>	
					       <br>

					    <div class="form-group">
					<center>
					     	<button class="btn btn-success " onclick="window.print()">Print</button>
					     	<a href="{{url('stu_home')}}" class="btn btn-primary">Back To Home</a></center>
					    </div>	

				
			  </form>
           </div>
           </div>
           </div>
           </div>
           </div>
           </div>
           </section>

           
  
</div>

  
</body>
</html>

