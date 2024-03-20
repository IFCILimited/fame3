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
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  
    <link rel="stylesheet" type="text/css" href="admin/css/responsive.css">
    <style>
        .login-dark {
            background-image: radial-gradient(at top left, #05C09B 0%, #3BE78E 50%, #3BE78E 100%);

        }

        .border-top {
            border-color: var(--border-color) !important;
        }
    </style>
</head>

<body>
    <!-- login page start-->
    <div class="container-fluid p-0">
        <div class="row m-0">
            <div class="col-12 p-0">
                <div class="login-card login-dark">
                    <div>
                        <div class="card w-100">
                            <div class="card-header">
                                <img class="" src="{{ asset('admin/images/logo/logo.png')}}" alt="logo-dark">
                                <img class="" style="float: right;" src="{{ asset('admin/images/logo/logo_dark.png')}}" alt="logo-dark">
                            </div>
                            <div class="card-body">
                                <div class="horizontal-wizard-wrapper">
                                    <div class="row g-3">
                                        <div class="col-12 main-horizontal-header">
                                            <div class="nav nav-pills horizontal-options" id="horizontal-wizard-tab"
                                                role="tablist" aria-orientation="vertical"><a class="nav-link active"
                                                    id="registration-form-tab" data-bs-toggle="pill" href="#registration-form"
                                                    role="tab" aria-controls="registration-form" aria-selected="true">
                                                    <div class="horizontal-wizard">
                                                        <div class="stroke-icon-wizard"><i class="fa fa-user"> </i>
                                                        </div>
                                                        <div class="horizontal-wizard-content">
                                                            <h6>Registration Form</h6>
                                                        </div>
                                                    </div>
                                                </a><a class="nav-link" id="manufacturing-information-tab" data-bs-toggle="pill"
                                                    href="#manufacturing-information" role="tab" aria-controls="manufacturing-information"
                                                    aria-selected="false" tabindex="-1">
                                                    <div class="horizontal-wizard">
                                                        <div class="stroke-icon-wizard"> <i class="fa fa-chain-broken">
                                                            </i></div>
                                                        <div class="horizontal-wizard-content">
                                                            <h6>Manufacturing information</h6>
                                                        </div>
                                                    </div>
                                                </a><a class="nav-link" id="registered-office-wizard-tab" data-bs-toggle="pill"
                                                    href="#registered-office-wizard" role="tab" aria-controls="registered-office-wizard"
                                                    aria-selected="false" tabindex="-1">
                                                    <div class="horizontal-wizard">
                                                        <div class="stroke-icon-wizard"><i class="fa fa-group"></i>
                                                        </div>
                                                        <div class="horizontal-wizard-content">
                                                            <h6>Registered Office </h6>
                                                        </div>
                                                    </div>
                                                </a><a class="nav-link" id="manufacturing-plants-wizard-tab" data-bs-toggle="pill"
                                                href="#manufacturing-plants-wizard" role="tab" aria-controls="manufacturing-plants-wizard"
                                                aria-selected="false" tabindex="-1">
                                                <div class="horizontal-wizard">
                                                    <div class="stroke-icon-wizard"><i class="fa fa-group"></i>
                                                    </div>
                                                    <div class="horizontal-wizard-content">
                                                        <h6>Manufacturing xEV Plants </h6>
                                                    </div>
                                                </div>
                                            </a><a class="nav-link" id="authorized-person-details-wizard-tab" data-bs-toggle="pill"
                                            href="#authorized-person-details-wizard" role="tab" aria-controls="authorized-person-details-wizard"
                                            aria-selected="false" tabindex="-1">
                                            <div class="horizontal-wizard">
                                                <div class="stroke-icon-wizard"><i class="fa fa-group"></i>
                                                </div>
                                                <div class="horizontal-wizard-content">
                                                    <h6>Authorized Person Details </h6>
                                                </div>
                                            </div>
                                        </a>
                                        <a class="nav-link" id="bank-details-wizard-tab" data-bs-toggle="pill"
                                                href="#bank-details-wizard" role="tab" aria-controls="bank-details-wizard"
                                                aria-selected="false" tabindex="-1">
                                                <div class="horizontal-wizard">
                                                    <div class="stroke-icon-wizard"><i class="fa fa-group"></i>
                                                    </div>
                                                    <div class="horizontal-wizard-content">
                                                        <h6>Bank Details</h6>
                                                    </div>
                                                </div>
                                            </a> <a class="nav-link" id="other-details-wizard-tab" data-bs-toggle="pill"
                                            href="#other-details-wizard" role="tab" aria-controls="other-details-wizard"
                                            aria-selected="false" tabindex="-1">
                                            <div class="horizontal-wizard">
                                                <div class="stroke-icon-wizard"><i class="fa fa-group"></i>
                                                </div>
                                                <div class="horizontal-wizard-content">
                                                    <h6>Other Details</h6>
                                                </div>
                                            </div>
                                        </a></div>
                                        </div>
                                        <form>
                                        <div class="col-12">
                                            <div class="tab-content dark-field" id="horizontal-wizard-tabContent">
                                                <div class="tab-pane fade show active" id="registration-form"
                                                    role="tabpanel" aria-labelledby="wizard-info-tab">
                                                    <div class="row g-3">
                                                        <div class="col-xl-4 col-sm-6">
                                                            <label class="form-label">Name of OEM<span class="txt-danger">*</span></label>
                                                            <input class="form-control"  type="text" placeholder="Enter first name"
                                                                required="">
                                                        </div>
                                                        <div class="col-4">
                                                            <div class="form-group">
                                                            <label class="col-form-label pt-0">Type of OEM:<span class="text-danger">*</span></label>
                                                                <select class="form-control">
                                                                    <option selected="selected" value="0">Select</option>
                                                                    <option value="1">Proprietorship</option>
                                                                    <option value="2">Partnership/LLP</option>
                                                                    <option value="3">Company</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                        <div class="col-xl-4 col-sm-6">
                                                            <label class="form-label">Username<span class="txt-danger">*</span></label>
                                                            <input class="form-control"  type="text" placeholder="Enter first name"
                                                                required="">
                                                        </div>
                                                        <div class="col-xl-4 col-sm-6">
                                                            <label class="form-label">Password<span class="txt-danger">*</span></label>
                                                            <input class="form-control"  type="text" placeholder="Enter first name"
                                                                required="">
                                                        </div>
                                                        <div class="col-xl-4 col-sm-6">
                                                            <label class="form-label">Confirm Password<span class="txt-danger">*</span></label>
                                                            <input class="form-control"  type="text" placeholder="Enter first name"
                                                                required="">
                                                        </div>
                                                      
                                                        <div class="col-12">
                                                            <p>Note: The password should be between 8 to 15 Characters. The password must have at least one alphabet, one digit and one special character (@#$&).</p>
                                                        </div>
                                                    </div>
                                                   
                                                </div>
                                                <div class="tab-pane fade" id="manufacturing-information" role="tabpanel"
                                                    aria-labelledby="bank-wizard-tab">
                                                    <div class="row g-3">
                                                        <div class="col-6">
                                                            <div class="form-group">
                                                            <label class="col-form-label pt-0">Company Registration No.<span class="text-danger">*</span></label>
                                                                <input class="form-control" type="text" required="" placeholder="Company Registration No">
                                                                <span>For Partnership and Proprietorship please enter 00000 </span>
                                                            </div>
                                                        </div>
                                                        <div class="col-6">
                                                            <div class="form-group">
                                                            <label class="col-form-label pt-0">Company Registration Certificate No.<span class="text-danger">*</span></label>
                                                                <br><a href="#" class="btn btn-success"><i class="fa fa-download"></i> Download</a><br>
                                                                <span>(ROC for Company, MOA & Rules/Deed for Partnership/Proprietorship)</span>
                                                            </div>
                                                        </div>
                                                        <div class="col-6">
                                                            <div class="form-group">
                                                            <label class="col-form-label pt-0">GSTIN No.<span class="text-danger">*</span></label>
                                                                <input class="form-control" type="text" required="" placeholder="GSTIN No.">
                                                               
                                                            </div>
                                                        </div>
                                                        <div class="col-6">
                                                            <div class="form-group">
                                                            <label class="col-form-label pt-0">GSTIN Registration File<span class="text-danger">*</span></label>
                                                                <input class="form-control" type="file" required>
                                                            </div>
                                                        </div>
                                                        <div class="col-6">
                                                            <div class="form-group">
                                                            <label class="col-form-label pt-0">OEM PAN<span class="text-danger">*</span></label>
                                                                <input class="form-control" type="text" required="" placeholder="GSTIN No.">
                                                               
                                                            </div>
                                                        </div>
                                                        <div class="col-6">
                                                            <div class="form-group">
                                                            <label class="col-form-label pt-0">OEM PAN File<span class="text-danger">*</span></label>
                                                                <input class="form-control" type="file" required>
                                                            </div>
                                                        </div>
                                                        <div class="col-6">
                                                            <p>
                                                                Details of R&D Facilities like total annual expenditure on R&D, No of employee, total patent if any, whether R&D facility recognized by any Govt agency etc. on Company Letter Head duly signed by authorized person.
                                                            </p>
                                                        </div>
                                                        <div class="col-6">
                                                            <div class="form-group">
                                                            <label class="col-form-label pt-0">R&D Facilities File <span class="text-danger">*</span></label>
                                                                <input class="form-control" type="file" required>
                                                            </div>
                                                        </div>
                                                        <div class="col-6">
                                                            <div class="form-group">
                                                            <label class="col-form-label pt-0">Annual Turnover (INR in cr)<span class="text-danger">*</span></label>
                                                                <input class="form-control" type="text" required="" placeholder="Annual Turnover (INR in cr)">
                                                               
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="tab-pane fade" id="registered-office-wizard" role="tabpanel"
                                                    aria-labelledby="registered-office-wizard-tab">
                                                    <div class="row g-3">
                                                        <div class="col-4">
                                                            <div class="form-group">
                                                            <label class="col-form-label pt-0">Address<span class="text-danger">*</span></label>
                                                                <input class="form-control" type="text"  placeholder="Address">
                                                            </div>
                                                        </div>
                                                        <div class="col-4">
                                                            <div class="form-group">
                                                            <label class="col-form-label pt-0">City<span class="text-danger">*</span></label>
                                                                <select class="form-control">
                                                                    <option selected="selected" value="0">Select</option>
                                                                    <option value="1">Delhi</option>
                                                                  
                                                                </select>
                                                            </div>
                                                        </div>
                                                        <div class="col-4">
                                                            <div class="form-group">
                                                            <label class="col-form-label pt-0">Landmark<span class="text-danger">*</span></label>
                                                                <input class="form-control" type="text" required="" placeholder="Landmark">
                                                            </div>
                                                        </div>
                                                        <div class="col-4">
                                                            <div class="form-group">
                                                            <label class="col-form-label pt-0">Pincode<span class="text-danger">*</span></label>
                                                                <input class="form-control" type="text" required="" placeholder="Pincode">
                                                            </div>
                                                        </div>
                                                        <div class="col-4">
                                                            <div class="form-group">
                                                            <label class="col-form-label pt-0"> State<span class="text-danger">*</span></label>
                                                                <select class="form-control">
                                                                    <option selected="selected" value="0">Please select</option>
                                                                    <option value="1">Delhi</option>
                                                                    
                                                                </select>
                                                            </div>
                                                        </div>
                                                        <div class="col-4">
                                                            <div class="form-group">
                                                            <label class="col-form-label pt-0">Landline No.<span class="text-danger">*</span></label>
                                                                <input class="form-control" type="text" required="" placeholder="Landline No.">
                                                            </div>
                                                        </div>
                                                        <div class="col-4">
                                                            <div class="form-group">
                                                            <label class="col-form-label pt-0">District<span class="text-danger">*</span></label>
                                                                <select class="form-control">
                                                                    <option selected="selected" value="0">Select</option>
                                                                    <option value="1">Delhi</option>
                                                                  
                                                                </select>
                                                            </div>
                                                        </div>
                                                        <div class="col-4">
                                                            <div class="form-group">
                                                            <label class="col-form-label pt-0">Fax No<span class="text-danger">*</span></label>
                                                                <input class="form-control" type="text" required="" placeholder="Fax No">
                                                            </div>
                                                        </div>
                                                        <div class="col-4">
                                                            <div class="form-group">
                                                            <label class="col-form-label pt-0">E-Mail<span class="text-danger">*</span></label>
                                                                <input class="form-control" type="text" required="" placeholder="E-Mail">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="tab-pane fade" id="manufacturing-plants-wizard" role="tabpanel"
                                                    aria-labelledby="manufacturing-plants-wizard-tab">
                                                    <div class="row g-3">
                                                        <div class="table-responsive ">
                                                            <table class="table table-bordered">
                                                              <thead>
                                                                <tr class="">
                                                                  <th scope="col">S.No.</th>
                                                                  <th scope="col">Plant Name</th>
                                                                  <th scope="col">Address</th>
                                                                  <th scope="col">Email Id</th>
                                                                  <th scope="col">State</th>
                                                                  <th scope="col">District</th>
                                                                  <th scope="col">City</th>
                                                                  <th scope="col">Pincode	</th>
                                                                  <th scope="col">Landline No.</th>
                                                                  <th scope="col">Action</th>                                                                </th>
                                                                </tr>
                                                              </thead>
                                                              <tbody>
                                                                <tr class="">
                                                                  <th scope="row">1</th>
                                                                 
                                                                  <td> <input class="form-control" type="text" required="" placeholder="Plant Name"></td>
                                                                  <td> <input class="form-control" type="text" required="" placeholder="Address"></td>
                                                                  <td> <input class="form-control" type="email" required="" placeholder="Email Id"></td>
                                                                  <td><select class="form-control">
                                                                    <option selected="selected" value="0">Please select</option>
                                                                    <option value="1">Delhi</option>
                                                                    
                                                                </select></td>
                                                                  <td>  <select class="form-control">
                                                                    <option selected="selected" value="0">Select</option>
                                                                    <option value="1">Delhi</option>
                                                                  
                                                                </select></td>
                                                                  <td>  <select class="form-control">
                                                                    <option selected="selected" value="0">Select</option>
                                                                    <option value="1">Delhi</option>
                                                                  
                                                                </select></td>
                                                                  <td> <input class="form-control" type="text" required="" placeholder="Pincode"></td>
                                                                  <td> <input class="form-control" type="text" required="" placeholder="Landline No."></td>
                                                                  <td> <button type="button" class="btn btn-sm btn-success">Add </button></td>
                                                                </tr>
                                                                
                                                              </tbody>
                                                            </table>
                                                          </div>
                                                    </div>
                                                
                                                </div>
                                                <div class="tab-pane fade" id="authorized-person-details-wizard" role="tabpanel"
                                                    aria-labelledby="authorized-person-details-wizard-tab">
                                                    <div class="row g-3">
                                                        <div class="col-xl-4 col-sm-6">
                                                            <label class="form-label">Name<span class="txt-danger">*</span></label>
                                                            <input class="form-control"  type="text" placeholder="Enter first name"
                                                                required="">
                                                        </div>
                                                        <div class="col-4">
                                                            <div class="form-group">
                                                            <label class="col-form-label pt-0">City<span class="text-danger">*</span></label>
                                                                <select class="form-control">
                                                                    <option selected="selected" value="0">Select</option>
                                                                    <option value="1">Delhi</option>
                                                                  
                                                                </select>
                                                            </div>
                                                        </div>
                                                        <div class="col-4">
                                                            <div class="form-group">
                                                            <label class="col-form-label pt-0">Address<span class="text-danger">*</span></label>
                                                                <input class="form-control" type="text"  placeholder="Address">
                                                            </div>
                                                        </div>
                                                        <div class="col-4">
                                                            <div class="form-group">
                                                            <label class="col-form-label pt-0">Landmark<span class="text-danger">*</span></label>
                                                                <input class="form-control" type="text" required="" placeholder="Landmark">
                                                            </div>
                                                        </div>
                                                        <div class="col-4">
                                                            <div class="form-group">
                                                            <label class="col-form-label pt-0">Pincode<span class="text-danger">*</span></label>
                                                                <input class="form-control" type="text" required="" placeholder="Pincode">
                                                            </div>
                                                        </div>
                                                        <div class="col-4">
                                                            <div class="form-group">
                                                            <label class="col-form-label pt-0">Mobile No.<span class="text-danger">*</span></label>
                                                                <input class="form-control" type="text" required="" placeholder="Mobile No.">
                                                            </div>
                                                        </div>
                                                        <div class="col-4">
                                                            <div class="form-group">
                                                            <label class="col-form-label pt-0">District<span class="text-danger">*</span></label>
                                                                <select class="form-control">
                                                                    <option selected="selected" value="0">Select</option>
                                                                    <option value="1">Delhi</option>
                                                                  
                                                                </select>
                                                            </div>
                                                        </div>
                                                        <div class="col-4">
                                                            <div class="form-group">
                                                            <label class="col-form-label pt-0"> State<span class="text-danger">*</span></label>
                                                                <select class="form-control">
                                                                    <option selected="selected" value="0">Please select</option>
                                                                    <option value="1">Delhi</option>
                                                                    
                                                                </select>
                                                            </div>
                                                        </div>
                                                        <div class="col-4">
                                                            <div class="form-group">
                                                            <label class="col-form-label pt-0">Fax No<span class="text-danger">*</span></label>
                                                                <input class="form-control" type="text" required="" placeholder="Fax No">
                                                            </div>
                                                        </div>
                                                        <div class="col-4">
                                                            <div class="form-group">
                                                            <label class="col-form-label pt-0">E-Mail<span class="text-danger">*</span></label>
                                                                <input class="form-control" type="text" required="" placeholder="E-Mail">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="tab-pane fade" id="bank-details-wizard" role="tabpanel"
                                                    aria-labelledby="bank-details-wizard-tab">
                                                    <div class="row g-3">
                                                        <div class="col-4">
                                                            <div class="form-group">
                                                            <label class="col-form-label pt-0">IFSC Code<span class="text-danger">*</span></label>
                                                                <input class="form-control" type="text" required="" placeholder="IFSC Code">
                                                            </div>
                                                        </div>
                                                        <div class="col-4">
                                                            <div class="form-group">
                                                            <label class="col-form-label pt-0">Account Holder Name<span class="text-danger">*</span></label>
                                                                <input class="form-control" type="text" required="" placeholder="Account Holder Name">
                                                            </div>
                                                        </div>
                                                        <div class="col-4">
                                                            <div class="form-group">
                                                            <label class="col-form-label pt-0">Name of Bank<span class="text-danger">*</span></label>
                                                                <input class="form-control" type="text" required="" placeholder="Name of Bank">
                                                            </div>
                                                        </div>
                                                        <div class="col-4">
                                                            <div class="form-group">
                                                            <label class="col-form-label pt-0">Name of Branch<span class="text-danger">*</span></label>
                                                                <input class="form-control" type="text" required="" placeholder="Name of Branch">
                                                            </div>
                                                        </div>
                                                        <div class="col-4">
                                                            <div class="form-group">
                                                            <label class="col-form-label pt-0">Address<span class="text-danger">*</span></label>
                                                                <input class="form-control" type="text" required="" placeholder="Address">
                                                            </div>
                                                        </div>
                                                        <div class="col-4">
                                                            <div class="form-group">
                                                            <label class="col-form-label pt-0">Branch City<span class="text-danger">*</span></label>
                                                                <input class="form-control" type="text" required="" placeholder="Branch City">
                                                            </div>
                                                        </div>
                                                        <div class="col-4">
                                                            <div class="form-group">
                                                            <label class="col-form-label pt-0">Account No.<span class="text-danger">*</span></label>
                                                                <input class="form-control" type="text" required="" placeholder="Account No.">
                                                            </div>
                                                        </div>
                                                        <div class="col-4">
                                                            <div class="form-group">
                                                            <label class="col-form-label pt-0">MICR Code<span class="text-danger">*</span></label>
                                                                <input class="form-control" type="text" required="" placeholder="MICR Code">
                                                            </div>
                                                        </div>
                                                        <div class="col-4">
                                                            <div class="form-group">
                                                            <label class="col-form-label pt-0"> Account Type<span class="text-danger">*</span></label>
                                                                <select class="form-control">
                                                                    <option selected="selected" value="0">Please select</option>
                                                                    <option value="1">Saving</option>
                                                                    <option value="2">Current</option>
                                                                    
                                                                </select>
                                                            </div>
                                                        </div>
                                                        <div class="col-4">
                                                            <div class="form-group">
                                                            <label class="col-form-label pt-0">Account No.<span class="text-danger">*</span></label>
                                                                <input class="form-control" type="text" required="" placeholder="Account No.">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>    
                                                <div class="tab-pane fade" id="other-details-wizard" role="tabpanel"
                                                aria-labelledby="other-details-wizard-tab">
                                                    <div class="row g-3">
                                                        <div class="col-4">
                                                            <div class="form-group">
                                                            <label class="col-form-label pt-0"> Dealer Mode<span class="text-danger">*</span></label>
                                                                <select class="form-control">
                                                                    <option selected="selected" value="0">Please select</option>
                                                                    <option value="1">Online</option>
                                                                    <option value="2">Current</option>
                                                                    
                                                                </select>
                                                            </div>
                                                        </div>
                                                        <div class="col-4">
                                                            <div class="form-group">
                                                            <label class="col-form-label pt-0"> Dealer Numbers<span class="text-danger">*</span></label>
                                                                <select class="form-control">
                                                                    <option selected="selected" value="0">Please select</option>
                                                                    <option value="1">Less than 25</option>
                                                                    <option value="2">More than and equal to 25</option>
                                                                    
                                                                </select>
                                                            </div>
                                                        </div>
                                                        <div class="col-4">
                                                            <div class="form-group">
                                                            <label class="col-form-label pt-0">No. of Dealer<span class="text-danger">*</span></label>
                                                                <input class="form-control" type="text" required="" placeholder="No. of Dealer">
                                                            </div>
                                                        </div>
                                                        <div class="col-4">
                                                            <div class="form-group">
                                                            <label class="col-form-label pt-0">Dealer List File<span class="text-danger">*</span></label>
                                                                <input class="form-control" type="file" required="" >
                                                            </div>
                                                        </div>
                                                        <div class="col-4">
                                                            <div class="form-group">
                                                            <label class="col-form-label pt-0"> State of dealer presence<span class="text-danger">*</span></label>
                                                                <select class="form-control" multiple>
                                                                    <option selected="selected" value="0">Please select</option>
                                                                    <option value="1">Delhi</option>
                                                                    
                                                                </select>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-12 col-sm-12 col-xs-12">
                                                            <div class="form-check">
                                                                <input class="form-check-input" id="flexCheckDefault" type="checkbox" value="">
                                                                <label class="form-check-label" for="flexCheckDefault">Declaration :* As per Guidelines: - I/ We declare that information provided here – in – above are correct and true to the best of our knowledge and also I/ we undertake to abide by all terms and conditions of the scheme as well as the instructions/guidelines/decisions to be issued/taken by DHI/NAB from time to time with respect to the scheme.</label>
                                                              </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
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
    </div>
</body>

</html>
