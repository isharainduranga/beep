<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from designreset.com/cork/ltr/demo3/auth_register_boxed.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 30 Mar 2020 13:44:35 GMT -->
<head>
    <meta charset="utf-8">
        <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no">
    <title>Register </title>
    <link rel="icon" type="image/x-icon" href="assets/img/favicon.ico"/>
    <!-- BEGIN GLOBAL MANDATORY STYLES -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:400,600,700" rel="stylesheet">
    <link href="{{asset('BackEnd/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{asset('BackEnd/assets/css/plugins.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{asset('BackEnd/assets/css/authentication/form-2.css')}}" rel="stylesheet" type="text/css" />
    <!-- END GLOBAL MANDATORY STYLES -->
    <link rel="stylesheet" type="text/css" href="{{asset('BackEnd/assets/css/forms/theme-checkbox-radio.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('BackEnd/assets/css/forms/switches.css')}}">

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<!-- Toastr -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.css">


    <style>
        .error {
            color: red;
            font-weight: 700;
            display: block;
            padding: 6px 0;
            font-size: 14px;
        }
    
        .form-control.error {
            border-color: red;
            padding: .375rem .75rem;
    
        }
    </style>
</head>
<body class="form">
    <div class="form-container outer">
        <div class="form-form">
            <div class="form-form-wrap">
                <div class="form-container">
                    <div class="form-content">
                       
                        <h1 class="">Register</h1>
                        <p class="signup-link register">Already have an account? <a href="/login">Log in</a></p>
                        <form  class="text-left" id="user_form" role="form" method="POST" enctype="multipart/form-data">
                            {{ csrf_field() }}
                            <div class="form" >

                                <div id="username-field" class="field-wrapper input">
                                    <label for="username">USERNAME</label>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-user"><path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path><circle cx="12" cy="7" r="4"></circle></svg>
                                    <input type="text" class="form-control" id="txt_username" name="txt_username">
                                    <input type="hidden" class="form-control" id="txt_for" name="txt_for">
                                </div>

                                <div id="email-field" class="field-wrapper input">
                                    <label for="email">EMAIL</label>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-at-sign register"><circle cx="12" cy="12" r="4"></circle><path d="M16 8v5a3 3 0 0 0 6 0v-1a10 10 0 1 0-3.92 7.94"></path></svg>
                                    <input type="email" class="form-control" id="txt_email" name="txt_email">
                                </div>

                                <div id="password-field" class="field-wrapper input mb-2">
                                    <div class="d-flex justify-content-between">
                                        <label for="password">PASSWORD</label>
                                    </div>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-lock"><rect x="3" y="11" width="18" height="11" rx="2" ry="2"></rect><path d="M7 11V7a5 5 0 0 1 10 0v4"></path></svg>
                                    <input id="txt_password" name="txt_password" type="password" class="form-control" placeholder="Password">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" id="toggle-password" class="feather feather-eye"><path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"></path><circle cx="12" cy="12" r="3"></circle></svg>
                                </div>

                                <div id="password-field" class="field-wrapper input mb-2">
                                    <div class="d-flex justify-content-between">
                                        <label for="password">Confirm Password</label>
                                    </div>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-lock"><rect x="3" y="11" width="18" height="11" rx="2" ry="2"></rect><path d="M7 11V7a5 5 0 0 1 10 0v4"></path></svg>
                                    <input id="txt_confirm_password" name="txt_confirm_password" type="password" class="form-control" placeholder="Confirm Password">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" id="toggle-password" class="feather feather-eye"><path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"></path><circle cx="12" cy="12" r="3"></circle></svg>
                                </div>

                                <div id="email-field" class="field-wrapper input">
                                    <label for="email">PROFILE IMAGE</label>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-at-sign register"><circle cx="12" cy="12" r="4"></circle><path d="M16 8v5a3 3 0 0 0 6 0v-1a10 10 0 1 0-3.92 7.94"></path></svg>
                                    <input type="file" class="form-control" name="txt_propic" id="txt_propic">
                                </div>

                                <div class="field-wrapper terms_condition">
                                    <div class="n-chk">
                                        <label class="new-control new-checkbox checkbox-primary">
                                       </label>
                                    </div>

                                </div>

                                <div class="d-sm-flex justify-content-between">
                                    <div class="field-wrapper">
                                        <button type="submit" class="btn btn-primary" value="">Save</button>
                                    </div>
                                </div>

                            

                            </div>
                        </form>
                      
                    </div>                    
                </div>
            </div>
        </div>
    </div>
    
 

   
    <script>
          $('#txt_for').val('INSERT');

           $(document).ready(function() {
            $("#user_form").validate({
                ignore: [],
            rules: {

                    txt_email: {
                        required: true,
                        email: true
                    },
                    txt_password: {
                        required: true,
                       
                    },
                    txt_confirm_password: {
                        required: true,
                        equalTo: '#txt_password'
                    },
                    txt_propic:{
                        required: true,
                    },
                    txt_username: {
                        required: true,
                    }
                    
                   

                },
                messages: {
                    txt_username: "Username is required!",
                    txt_password: "password is Required!",
                    txt_email: {
                        required: "Email Address is Required!",
                        email: "Please enter a valid email address!"
                    },
                    txt_confirm_password: {
                        required: "confirm is Required!",
                    },
                    txt_propic: {
                        required: "Profile Image is Required!",
                    },
                },
                submitHandler: function(form) {
                let formData = new FormData(form);
                   
                    // insert data 
                    if ($('#txt_for').val() === 'INSERT') {
                        $.ajax({
                            type: 'POST',
                            url: '/save',
                            data: formData,
                            dataType: 'json',
                            processData: false,
                            enctype: 'multipart/form-data',
                            contentType: false,
                            cache: false,
                            success: function(result) {

                                
                                if (result.status == 200) {
                                    toastr["success"](result.message)

                                  
                                }

                                if (result.status == 500) {
                                    toastr["error"](result.message)

                                  
                                }


                            }


                        }); 

                        
                    }


               }

             });
           });
    </script>
<!-- Toastr -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>

    <!-- BEGIN GLOBAL MANDATORY SCRIPTS -->
    <script src="{{asset('BackEnd/bootstrap/js/popper.min.js')}}"></script>
    <script src="{{asset('BackEnd/bootstrap/js/bootstrap.min.js')}}"></script>
    
    <!-- END GLOBAL MANDATORY SCRIPTS -->
    {{-- <script src="{{asset('BackEnd/assets/js/authentication/form-2.js')}}"></script> --}}

    <!-- jquery validations  this validations links are required-->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.2/jquery.validate.min.js"></script>
<script
    src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validation-unobtrusive/3.2.11/jquery.validate.unobtrusive.min.js">
</script>


</body>
</html>