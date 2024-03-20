<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
   
    <link rel="icon" href="admin/images/favicon.png" type="image/x-icon">
    <link rel="shortcut icon" href="admin/images/favicon.png" type="image/x-icon">
    <title>Login</title>
    <!-- Google font-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin="">
    <link href="admin/css2?family=Montserrat:wght@200;300;400;500;600;700;800&amp;display=swap" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="admin/css/font-awesome.css">
    <!-- ico-font-->
    <link rel="stylesheet" type="text/css" href="admin/css/vendors/icofont.css">
    <!-- Themify icon-->
    <link rel="stylesheet" type="text/css" href="admin/css/vendors/themify.css">
    <!-- Flag icon-->
    <link rel="stylesheet" type="text/css" href="admin/css/vendors/flag-icon.css">
    <!-- Feather icon-->
    <link rel="stylesheet" type="text/css" href="admin/css/vendors/feather-icon.css">
    <!-- Plugins css start-->
    <!-- Plugins css Ends-->
    <!-- Bootstrap css-->
    <link rel="stylesheet" type="text/css" href="admin/css/vendors/bootstrap.css">
    <!-- App css-->
    <link rel="stylesheet" type="text/css" href="admin/css/style.css">
    <link id="color" rel="stylesheet" href="admin/css/color-1.css" media="screen">
    <!-- Responsive css-->
    <link rel="stylesheet" type="text/css" href="admin/css/responsive.css">
    <style>
        .login-dark {
        background-image: radial-gradient(at top left, #05C09B 0%, #3BE78E 50%, #3BE78E 100%);
       
    }
        .card{
            border-radius: 3%
        }
         .border-top{
        border-color: var(--border-color) !important;
    }
    </style>
  </head>
  <body>
    @php
    if(session('role_id') == 1){
        $utype = 'NAB/MHI';
    }
    elseif(session('role_id') == 2){
        $utype = 'OEM';
    }
    elseif(session('role_id') == 3){
        $utype = 'Dealers';
    }
    elseif(session('role_id') == 4){
        $utype = 'Testing Agency';
    }
    else{
        $utype = null;
    }
@endphp
    <!-- login page start-->
    <div class="container-fluid p-0">
      <div class="row m-0">
        <div class="col-12 p-0">    
          <div class="login-card login-dark">
            <div>
              {{-- <div><a class="logo" href="index.html"><img class="img-fluid for-dark" src="admin/images/logo/logo.png" alt="looginpage"><img class="img-fluid for-light" src="admin/images/logo/logo.png" alt="looginpage"></a></div> --}}
              <div class="login-main"> 
                <form class="theme-form" method="POST" action="{{ route('login') }}" id="loginForm">
                    @csrf
                  <h4>Sign in to account </h4>
                  <p>Enter your username & password to login</p>
                  <div class="form-group">
                    <label class="col-form-label">User Type</label>
                    <input class="form-control" type="text" value="{{$utype}}" readonly placeholder="">
                  </div>
                  <div class="form-group">
                    <label class="col-form-label">Username</label>
                    <input class="form-control @error('username') is-invalid @enderror" type="text" name="identity" id="identity" required="" placeholder="Username">
                    @error('username')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                  <div class="form-group">
                    <label class="col-form-label">Password </label>
                    <div class="form-input position-relative">
                      <input class="form-control @error('password') is-invalid @enderror" type="password" name="password" id="password" required="" placeholder="Password">
                      <div class="show-hide"> <span class="show"></span></div>
                      @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                    </div>
                  </div>
                  <div class="form-group mb-0">
                    <div class="checkbox p-0">
                      <input id="checkbox1" type="checkbox">
                      <label class="text-muted" for="checkbox1">Remember password</label>
                    </div><a class="link" href="#">Forgot password?</a>
                    <div class="text-end mt-3">
                      <button class="btn btn-primary btn-block w-100" type="submit">Sign in</button>
                    </div>
                  </div>
                  
                  <p class="mt-4 mb-0 text-center">Don't have account?<a class="ms-2" href="{{route('register')}}">Create Account</a></p>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- latest jquery-->
      <script src="admin/js/jquery.min.js"></script>
      <!-- Bootstrap js-->
      <script src="admin/js/bootstrap/bootstrap.bundle.min.js"></script>
      <!-- feather icon js-->
      <script src="admin/js/icons/feather-icon/feather.min.js"></script>
      <script src="admin/js/icons/feather-icon/feather-icon.js"></script>
      <!-- scrollbar js-->
      <!-- Sidebar jquery-->
      <script src="admin/js/config.js"></script>
      <!-- Plugins JS start-->
      <!-- calendar js-->
      <!-- Plugins JS Ends-->
      <!-- Theme js-->
      <script src="admin/js/script.js"></script>

    {{-- <script src="js/bootstrap/jquery.min.js"></script>
    <script src="js/bootstrap/popper.min.js"></script>
    <script src="js/bootstrap/bootstrap.min.js"></script> --}}
    <script src="{{ asset('js/landing/crypto-js.min.js') }}"></script>
    <script src="{{ asset('js/landing/aes.min.js') }}"></script>
    <script>
        document.querySelector('#loginForm').addEventListener('submit', (e) => {
            e.preventDefault();
            var id = document.getElementById("identity");
            var pwd = document.getElementById("password");

            var key = CryptoJS.enc.Hex.parse("0123456789abcdef0123456789abcdef");
            var iv = CryptoJS.enc.Hex.parse("abcdef9876543210abcdef9876543210");


            var encId = CryptoJS.AES.encrypt(id.value, key, {
                iv,
                padding: CryptoJS.pad.ZeroPadding,
            });
            var encPwd = CryptoJS.AES.encrypt(pwd.value, key, {
                iv,
                padding: CryptoJS.pad.ZeroPadding,
            });


            id.value = encId.toString();
            pwd.value = encPwd.toString();
            var loginForm = document.getElementById("loginForm");
            loginForm.submit();
        });
    </script>
    </div>
  </body>
</html>