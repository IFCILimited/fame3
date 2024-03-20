<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="icon" href="admin/images/favicon.png" type="image/x-icon">
    <link rel="shortcut icon" href="admin/images/favicon.png" type="image/x-icon">
    <title>Register</title>
    <!-- Google font-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin="">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@200;300;400;500;600;700;800&amp;display=swap"
        rel="stylesheet">
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

        .card {
            border-radius: 3%
        }

        .border-top {
            border-color: var(--border-color) !important;
        }
    </style>
</head>

<body>
    {{-- @if ($message = Session::get('success'))
    <div class="alert alert-success">
        <p>{{ $message }}</p>
    </div>
    @endif
    @if (count($errors) > 0)
    <div class="alert alert-danger">
        <strong>Whoops!</strong> There were some problems with your input.
        <br>
        <br>
        <ul>
            @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif --}}
    <!-- login page start-->
    <div class="container-fluid p-0">
        <div class="row m-0">
            <div class="col-12 p-0">
                <div class="login-card login-dark">
                    <div>
                        <div class="login-main" style="width: 1100px !important;">
                            <form action="{{ route('register') }}" id="PreRegForm" role="form" method="POST"
                                class='form-horizontal' accept-charset="utf-8" enctype='multipart/form-data' files=true>
                                @csrf
                                <h4>OEM Pre-Registration</h4>
                                <p class="text-danger">Enter your personal details to create account</p>
                                <div class="row g-2">
                                    <div class="col-4">
                                        <div class="form-group">
                                            <label class="col-form-label pt-0">OEM Name:<span
                                                    class="text-danger">*</span></label>
                                            <input class="form-control" type="text" name="Name"
                                            value="{{ old('Name') }}"  placeholder="OEM Name">
                                            @error('Name')
                                                <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-4">
                                        <div class="form-group">
                                            <label class="col-form-label pt-0">Type of OEM:<span
                                                    class="text-danger">*</span></label>
                                            <select class="form-control" name="oem_type">
                                                <option selected disabled>Select</option>
                                                <option value="Proprietorship">Proprietorship</option>
                                                <option value="Partnership/LLP">Partnership/LLP</option>
                                                <option value="Company">Company</option>
                                            </select>
                                            @error('oem_type')
                                                <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-4">
                                        <div class="form-group">
                                            <label class="col-form-label pt-0">OEM Address:<span
                                                    class="text-danger">*</span></label>
                                            <input class="form-control" type="text" name="Address"
                                            value="{{ old('Address') }}"  placeholder="OEM Address">
                                            @error('Address')
                                                <span class="text-danger">{{ $message }}</span>
                                            @enderror

                                        </div>
                                    </div>
                                    <div class="col-4">
                                        <div class="form-group">
                                            <label class="col-form-label pt-0">OEM Pincode:<span
                                                    class="text-danger">*</span></label>
                                            <input class="form-control" type="text" name="Pincode"
                                            value="{{ old('Pincode') }}"  placeholder="OEM Pincode"
                                                onkeyup="GetCityByPinCode('OEM', this.value, 0)">
                                            <span id="OEMpincodeMsg0"
                                                style="color:red;font-weight:bold;display: none">
                                                @error('Pincode')
                                                    <span class="text-danger">{{ $message }}</span>
                                                @enderror
                                        </div>
                                    </div>
                                    <div class="col-4">
                                        <div class="form-group">
                                            <label class="col-form-label pt-0">OEM State:<span
                                                    class="text-danger">*</span></label>
                                            {{-- <select class="form-control">
                                <option selected="selected" value="0">Please select</option>
                                <option value="1">Delhi</option>
                            </select> --}}
                                            <input class="form-control" type="text" name="State"
                                            value="{{ old('State') }}"  placeholder="OEM State" id="OEMAddState0" readonly>
                                            @error('State')
                                                <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-4">
                                        <div class="form-group">
                                            <label class="col-form-label pt-0">OEM District:<span
                                                    class="text-danger">*</span></label>
                                            {{-- <select class="form-control">
                                <option selected="selected" value="0">Select</option>
                                <option value="1">Delhi</option>
                              
                            </select> --}}
                                            <input class="form-control" type="text" name="District"
                                            value="{{ old('District') }}"  placeholder="OEM District" id="OEMAddDistrict0" readonly>
                                            @error('District')
                                                <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-4">
                                        <div class="form-group">
                                            <label class="col-form-label pt-0">OEM City:<span
                                                    class="text-danger">*</span></label>
                                            {{-- <select class="form-control">
                                <option selected="selected" value="0">Select</option>
                                <option value="1">Delhi</option>
                            </select> --}}
                                            <input class="form-control" type="text" name="City"
                                            value="{{ old('City') }}"  placeholder="OEM City" id="OEMAddCity0">
                                            @error('City')
                                                <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="col-4">
                                        <div class="form-group">
                                            <label class="col-form-label pt-0">Contact Person Name:<span
                                                    class="text-danger">*</span></label>
                                            <input class="form-control" type="text" name="Person"
                                            value="{{ old('Person') }}"  placeholder="Contact Person">
                                            @error('Person')
                                                <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-4">
                                        <div class="form-group">
                                            <label class="col-form-label pt-0">Mobile No.:<span
                                                    class="text-danger">*</span></label>
                                            <input class="form-control" type="text" name="Mobile"
                                            value="{{ old('Mobile') }}"  placeholder="Mobile No.">
                                            @error('Mobile')
                                                <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-4">
                                        <div class="form-group">
                                            <label class="col-form-label pt-0">E-Mail:<span
                                                    class="text-danger">*</span></label>
                                            <input class="form-control" type="text" name="Mail"
                                            value="{{ old('Mail') }}"  placeholder="E-Mail">
                                            @error('Mail')
                                                <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-4">
                                        <div class="form-group">
                                            <label class="col-form-label pt-0">Fax No:</label>
                                            <input class="form-control" type="text" name="Fax"
                                            value="{{ old('Fax') }}"  placeholder="Fax No">
                                        </div>
                                    </div>
                                    <div class="col-4">
                                        <div class="form-group">
                                            <label class="col-form-label pt-0">Company Registration No:<span
                                                    class="text-danger">*</span></label>
                                            <input class="form-control" type="text" name="Registration"
                                            value="{{ old('Registration') }}"  placeholder="Company Registration No">
                                            <span>For Partnership and Proprietorship please enter 00000 </span>
                                            @error('Registration')
                                                <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-4">
                                        <div class="form-group">
                                            <label class="col-form-label pt-0">Company Registration Certificate
                                                No.:<span class="text-danger">*</span></label>
                                            <input class="form-control" type="file" name="Registration_file">
                                            <span>Upload ROC for Company, MOA & Rules / Deed for Partnership /
                                                Proprietorship (pdf only and max. 100 KB size)</span>
                                            @error('Registration_file')
                                                <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group mb-0 text-center">

                                    <button class="btn btn-primary btn-block w-20" type="submit">Submit</button>
                                </div>

                                <p class="mt-4 mb-0">Already have an account? <a class="ms-2"
                                        href="{{ route('home') }}">Home</a></p>

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

        {{-- pincode script --}}
        @include('partials.js.pincode')
        {{-- @include('jsvalidation::initialize') --}}
        {!! JsValidator::formRequest('App\Http\Requests\PreRegisterRequest', '#PreRegForm') !!}
    </div>
</body>

</html>
