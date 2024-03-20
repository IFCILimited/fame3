<!doctype html>
<html lang="en">
    <head>
        <title>Login</title>
        <!-- Required meta tags -->
        <meta charset="utf-8" />
        <meta
            name="viewport"
            content="width=device-width, initial-scale=1, shrink-to-fit=no"
        />

        <!-- Bootstrap CSS v5.2.1 -->
        <link rel="stylesheet" href="css/custome/style.css">
        <link rel="stylesheet" href="css/custome/responsive.css">
        <link rel="stylesheet" href="css/bootstrap/bootstrap.css">
        <link rel="stylesheet" href="css/bootstrap/bootstrap-grid.css">
        <link rel="stylesheet" href="css/bootstrap/bootstrap-reboot.css">
        <title>Login</title>
        <style>
            .section-first {
            background-image: radial-gradient(at top left, #05C09B 0%, #3BE78E 50%, #3BE78E 100%);
            padding-top: 60px;
            padding-bottom: 60px;
            height: 100vh;
            position: fixed;
            width: 100%;
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
        <header>
            <!-- place navbar here -->
        </header>
        <main>
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
            
<div class="section-first">
    <div class="container">
       <div class="row">
          
          <div class="col-lg-6 offset-3 col-md-12 col-sm-12 card">
             <form>
                <h3 class="text-center pt-4">Login</h3>
                <div class="row">
                    <div class="col-12">
                        <div class="form-group">
                            <label>User Type</label>
                            <input type="text" class="form-control" name="userType" value="{{$utype}}" readonly  placeholder="Username">
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="form-group">
                            <label>Username</label>
                            <input type="text" class="form-control" name="username"  placeholder="Username">
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="form-group">
                            <label>Password</label>
                            <input type="password" class="form-control" name="password"  placeholder="Password">
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="form-check my-3">
                            <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                            <label class="form-check-label" for="flexCheckDefault">
                                Remember me
                            </label>
                        </div>
                    </div>
                    <div class="col-12 text-center">
                        <button type="submit" class="btn btn-sm btn-primary w-50 px-3 py-2">LOGIN</button>
                    </div>
                    
                  
                </div>
             </form>
             <div class="mt-3 pt-3 border-top">
                <p class="mb-1"><a href="http://127.0.0.1:3000/password/reset"><i class="fa fa-lock me-2"></i>Forgot password?</a></p>
                <span>Don't have an account? <a href="http://127.0.0.1:3000/register">Register</a></span>
</div>
          </div>
       </div>
    </div>
 </div>
        </main>
        <footer>
            <!-- place footer here -->
        </footer>
        <!-- Bootstrap JavaScript Libraries -->
        <script src="js/bootstrap/jquery.min.js"></script>
   
 <!-- Popper JS -->
 <script src="js/bootstrap/popper.min.js"></script>
 <script src="js/bootstrap/bootstrap.min.js"></script>
    </body>
</html>
