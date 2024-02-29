<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="{{asset('login/fonts/icomoon/style.css')}}">

    <link rel="stylesheet" href="{{asset('login/css/owl.carousel.min.css')}}">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{asset('login/css/bootstrap.min.css')}}">
    
    <!-- Style -->
    <link rel="stylesheet" href="{{asset('login/css/style.css')}}">
    <link rel="stylesheet" href="{{asset('global.css')}}">

    <title>Login #7</title>
  </head>
  <body>
  

    

  
  <div class="content">
    <div class="container">
      <div class="row">
        <div class="col-md-6">
          <img src="{{asset('login/images/undraw_remotely_2j6y.svg')}}" alt="Image" class="img-fluid">
        </div>
        <div class="col-md-6 contents">
          <div class="row justify-content-center">
            <div class="col-md-8">
              <div class="mb-4">
              <h3>LOGIN ACCOUNT </h3>
           
              <p class="mb-4">This payroll system is managed by a company, all the private data and infomation may mention and displayed inside so only the authorize users are able to log in here.</p>
            </div>
            <form action="{{route('loginPOST')}}" method="post">
                @csrf

                @error('username')
                  <div class="text-danger">{{'Please input username.'}}</div>
              @enderror
              <div class="form-group first login-input">
                <label for="username">Username</label>
                <input type="text" class="form-control" id="username" name="username" value="{{old('username')}}">
              </div>
              
              @error('password')
                  <div class="text-danger">{{'Please input password.'}}</div>
              @enderror
              <div class="form-group last mb-4 login-input">
                <label for="password">Password</label>
                <input type="password" class="form-control" id="password" name="password">
              </div>
              
              <div class="d-flex mb-5 align-items-center">
                <label class="control control--checkbox mb-0"><span class="caption">Remember me</span>
                  <input type="checkbox" checked="checked"/>
                  <div class="control__indicator"></div>
                </label>
                <span class="ml-auto"><a href="#" class="forgot-pass">Forgot Password</a></span> 
              </div>

              <div class="control">
                <div align='center'>
                  @if (session('invalid'))
                      <div id="loginInvalid"></div>
                  @endif
                </div>
              </div>
              <input type="submit" value="Log In" class="btn btn-block btn-primary">

             
            </form>
            
            </div>
            
          </div>
          
        </div>
        
      </div>
    </div>
  </div>

  
    <script src="{{asset('login/js/jquery-3.3.1.min.js')}}"></script>
    <script src="{{asset('login/js/popper.min.js')}}"></script>
    <script src="{{asset('login/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('login/js/main.js')}}"></script>
    <script>console.clear();</script>
  </body>
</html>

@viteReactRefresh
@vite('resources\reactjavascript\src\index.jsx')