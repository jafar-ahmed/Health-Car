<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="{{ asset('css/login/fonts/icomoon/style.css') }} ">

    <link rel="stylesheet" href="{{ asset('css/login/css/owl.carousel.min.css') }}">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{ asset('css/login/css/bootstrap.min.css') }}">

    <!-- Style -->
    <link rel="stylesheet" href="{{ asset('css/login/css/style.css') }} ">

    <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css" rel="stylesheet">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.1/js/bootstrap.min.js"> </script>

    <title>Login #7</title>
  </head>
  <body style="background-color:gray;">



  <div class="content" style="background-color:gray;">
    <div class="container">
      <div class="row">
        <div class="col-md-6">
          <img src="{{ asset('css/login/images/undraw_remotely_2j6y.svg') }}" alt="Image" class="img-fluid">
        </div>
        <div class="col-md-6 contents">
          <div class="row justify-content-center">
            <div class="col-md-8">
              <div class="mb-4">
              <h3>Sign In</h3>
              <p class="mb-4">10,000 health is one next to zeros, record and keep it</p>
            </div>

            @error('faild')
                <div class="alert alert-danger">{{$message}}</div>
            @enderror
            <form action="{{ route('submit_login') }}" method="post">
                {{csrf_field()}}
              <div class="form-group first">
                <label for="username">Username</label>
                <input type="text" class="form-control" id="username" name="name">

              </div>
              <div class="form-group last mb-4">
                <label for="password">Password</label>
                <input type="password" class="form-control" id="password" name="pass">

              </div>

              <div class="d-flex mb-5 align-items-center">
                <label class="control control--checkbox mb-0"><span class="caption">Remember me</span>
                  <input type="checkbox" checked="checked"/>
                  <div class="control__indicator"></div>
                </label>
                <span class="ml-auto"><a href="{{ route('signup') }}" class="forgot-pass">SIGN UP</a></span>
              </div>

              <input type="submit" value="Log In" class="btn btn-block btn-primary">

              <span class="d-block text-left my-4 text-muted">&mdash; or login with &mdash;</span>

              <div class="social-login">
                <a href="https://www.facebook.com/" class="facebook">
                  <span class="icon-facebook mr-3"></span>
                </a>
                <a href="https://twitter.com/" class="twitter">
                  <span class="icon-twitter mr-3"></span>
                </a>
                <a href="#" class="google">
                  <span class="icon-google mr-3"></span>
                </a>
              </div>
            </form>
            </div>
          </div>

        </div>

      </div>
    </div>
  </div>


    <script src="{{ asset('css/login/js/jquery-3.3.1.min.js') }}"></script>
    <script src="{{ asset('css/login/js/popper.min.js') }}"></script>
    <script src="{{ asset('css/login/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('css/login/js/main.js') }}"></script>
  </body>
</html>
