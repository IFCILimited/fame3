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

    .card {
        border-radius: 3%
    }

    .border-top {
        border-color: var(--border-color) !important;
    }
</style>
<div class="section-first">
    <div class="container">
        <div class="row">

            <div class="col-lg-6 offset-3 col-md-12 col-sm-12 card">
                <form method="POST" action="{{ route('login') }}" id="loginForm">
                    @csrf
                    <h3 class="text-center pt-4">Login</h3>
                    <div class="row">
                        <div class="col-12">
                            <div class="form-group">
                                <label>User Type</label>
                                <input type="text" class="form-control" name="userType" value="OEM" readonly
                                    placeholder="Username">
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="form-group">
                                <label>Username</label>
                                <input type="text" class="form-control" name="username" placeholder="Username">
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="form-group">
                                <label>Password</label>
                                <input type="password" class="form-control" name="password" placeholder="Password">
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
                    <p class="mb-1"><a href="http://127.0.0.1:3000/password/reset"><i
                                class="fa fa-lock me-2"></i>Forgot password?</a></p>
                    <span>Don't have an account? <a href="{{ route('register') }}">OEM Pre-Register</a></span>
                </div>
            </div>
        </div>
    </div>
</div>
{{-- @endsection --}}
@push('scripts')
    <script src="js/bootstrap/jquery.min.js"></script>

    <!-- Popper JS -->
    <script src="js/bootstrap/popper.min.js"></script>
    <script src="js/bootstrap/bootstrap.min.js"></script>
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
@endpush
