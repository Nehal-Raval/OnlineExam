<!DOCTYPE html>
<html>
<head>
    <title>Email Varifation</title>
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
            <!--a href="{{url('stu_login')}}" class="nav-item nav-link" style="color: white;"><b>Student Login</b></a-->
            <a href="{{ route('login') }}" class="nav-item nav-link" style="color: white;"><b>Portal Login</b></a>
        </div>
    </div>
</nav>
    <br><br><br><br><br>
 
 <section class="content">
      <div class="container-fluid"> 
        <div class="row">
          <div class="col-sm-3"></div>
          <div class="col-sm-6">
            <div class="card">
              <div class="card-header">
                
                    <div class="panel-heading">Reset Password</div>
            </div>
              <div class="card-body col-sm-12">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif
                
                  
                    <form  method="POST" action="{{ route('password.email') }}">
                        {{ csrf_field() }}

                      <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                        <label for="email">Email address:</label>
                         <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required>

                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                      </div>
                      
                    <div class="form-group">
                            
                                <button type="submit" class="btn btn-primary">
                                    Send Password Reset Link
                                </button>
                            
                        </div>

                    </form>

               
             
            </div>
              </div>
              <!-- /.card-body -->
             
              <!-- /.card-footer-->
            </div>
            <!-- /.card -->
          </div>
        </div>
      </div>
    </section>
  




<!--div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Reset Password</div>

                <div class="panel-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

                    <form class="form-horizontal" method="POST" action="{{ route('password.email') }}">
                        {{ csrf_field() }}

                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <label for="email" class="col-md-4 control-label">E-Mail Address</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required>

                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    Send Password Reset Link
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div-->

<div class="footer bg-primary">
   <p class="mt-2 footerDesk bg-primary">© 2020 All Rights Reserved.Akshay</mark></p>
</div>
</body>
</html>