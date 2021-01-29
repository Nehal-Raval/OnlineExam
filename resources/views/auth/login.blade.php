
<!DOCTYPE html>
<html>
<head>
    <title></title>
        <!--meta charset="utf-8">
         <meta name="viewport" content="width=device-width, initial-scale=1">
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
    <nav class="navbar navbar-light navbar-expand-md fixed-top nav-fill bg-primary" >
       
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
            <a href="{{url('student/about')}}" class="nav-item nav-link" style="color: white;"><b>About Us</b></a>
            <a href="{{url('student/contectus')}}" class="nav-item nav-link" style="color: white;"><b>Contect-us</b></a>
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
        </div>
    </nav>
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
                   
                       
                         <div class="login-form">
                           <form class="form-horizontal" method="POST" action="{{ route('login') }}">
                            {{ csrf_field() }}
                                <h2 class="text-center">Sign In</h2>   
                                <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text">
                                                <span class="fa fa-user"></span>
                                            </span>                    
                                        </div>
                                        <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" placeholder="Email" required autofocus>
                                    
                                         @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                        @endif

                                    </div>
                                </div>
                                <div class="form-group {{ $errors->has('password') ? ' has-error' : '' }}">
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text">
                                                <i class="fa fa-lock"></i>
                                            </span>                    
                                        </div>
                                        <input id="password" type="password" placeholder="Password" class="form-control" name="password" required>

                                          @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                                    </div>
                                </div>        
                                <div class="form-group">
                                    <button type="submit" class="btn btn-primary btn-block">
                                    Login
                                </button>
                                </div>
                                <div class="bottom-action clearfix">
                                     <input type="checkbox"  name="remember" {{ old('remember') ? 'checked' : '' }}"> Remember Me
                                    <a href="{{ route('password.request') }}" class="float-right">Forgot Password?</a>
                                </div> 

                            </form>
                             <p class="text-center small">Don't have an account! <a href="{{ url('/register') }}">Sign up here</a>.</p>       
                        </div>
          
            <!--/row-->

        </div>
        <!--/col-->
    </div>
    <!--/row-->
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
</div>
</body>
</html>


<!--div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Login</div>

                <div class="panel-body">
                    <form class="form-horizontal" method="POST" action="{{ route('login') }}">
                        {{ csrf_field() }}

                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <label for="email" class="col-md-4 control-label">E-Mail Address</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required autofocus>

                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                            <label for="password" class="col-md-4 control-label">Password</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control" name="password" required>

                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}> Remember Me
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-8 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    Login
                                </button>

                                <a class="btn btn-link" href="{{ route('password.request') }}">
                                    Forgot Your Password?
                                </a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div-->
