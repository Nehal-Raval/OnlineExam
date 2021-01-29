<!DOCTYPE html>
<html>
<head>
	<title>Home</title>
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

  .carousel-inner img {
    width: 100%;
    height: 100%;
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
		<nav class="navbar navbar-nav navbar-dark bg-alumni navbar-expand-md fixed-top nav-fill bg-primary"  >
             <a class="navbar-brand" href="#" style="color: white; font-size: 30px;"><b>
                Online Exam</b>
                     <!--img src="public/Iamages/logo.jpg" style="width:80px; height: 80px;"-->
             </a>
        
    <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse justify-content-between" id="navbarCollapse">
        <div class="navbar-nav">
            <a href="#" class="nav-item nav-link active" style="color: white;"><b>Home</b></a>
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
            <a href="{{url('view/stu_login')}}" class="nav-item nav-link" style="color: white;"><b>Student Login</b></a>
            <a href="{{ route('login') }}" class="nav-item nav-link" style="color: white;"><b>Portal Login</b></a>
        </div>
    </div>
</nav>
	
        <div id="demo" class="carousel slide" data-ride="carousel">

  <!-- Indicators -->
  <!--ul class="carousel-indicators">
    <li data-target="#demo" data-slide-to="0" class="active"></li>
    <li data-target="#demo" data-slide-to="1"></li>
    <li data-target="#demo" data-slide-to="2"></li>
  </ul-->
  
  <!-- The slideshow -->
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="public/Iamages/f1.jpg" alt="Los Angeles" width="1100" height="500">
    </div>
    <div class="carousel-item">
      <img src="public/Iamages/f3.jpg" alt="Chicago" width="1100" height="500">
    </div>
    <div class="carousel-item">
      <img src="public/Iamages/f4.jpg" alt="New York" width="1100" height="500">
    </div>
  </div>
  
  <!-- Left and right controls -->
  <a class="carousel-control-prev" href="#demo" data-slide="prev">
    <span class="carousel-control-prev-icon"></span>
  </a>
  <a class="carousel-control-next" href="#demo" data-slide="next">
    <span class="carousel-control-next-icon"></span>
  </a>
</div>

<div class="footer bg-primary">
   <p class="mt-2 footerDesk bg-primary">© 2020 All Rights Reserved.Akshay</mark></p>
</div>
</body>
</html>