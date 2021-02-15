<!DOCTYPE html>
<html lang="en">
<head>
        <!-- CSRF Token -->
     <meta name="csrf-token" content="{{ csrf_token() }}"> 

     @include('Frontend.Template.header')

    {{-- <link href="{{asset('BackEnd/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet" type="text/css" /> --}}
    <link href="{{asset('BackEnd/assets/css/plugins.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{asset('BackEnd/assets/css/scrollspyNav.css')}}" rel="stylesheet" type="text/css" />

    <link href="{{asset('BackEnd/plugins/file-upload/file-upload-with-preview.min.css')}}" rel="stylesheet" type="text/css" />

      <!-- css -->
      <style>
        #button_style {
            padding: 10px 30px;
            background-color: #f00;
            font-size: 24px;
            width: 100%;
            border: 1px solid red;
            color: #fff;
            font-weight: bold;
            border-radius: 10px;
            margin-bottom: 20px;
            width: 50%;


        }

        /* -----------------------hover button start----------------------- */
        t1:hover {
            color: red;
        }

        .btnred {
            background-color: rgb(52, 48, 48);
            border: 2px solid red;
            color: white;
            padding: 2px 15px;
            border-radius: 12px;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            font-size: 16px;
            transition-duration: 0.4s;
            cursor: pointer;

        }

        .btnred:hover {
            background-color: red;
            color: white;
        }

        /* -----------------------hover button end----------------------- */

        /* -------------------------combobox start--------------------------- */

        /*the container must be positioned relative:*/
        .custom-select {
            position: relative;
            font-family: Arial;
        }

        .custom-select select {
            display: none;
            /*hide original SELECT element:*/
        }

        .select-selected {
            background-color: rgb(52, 48, 48);
        }

        /*style the arrow inside the select element:*/
        .select-selected:after {
            position: absolute;
            content: "";
            top: 14px;
            right: 10px;
            width: 0;
            height: 0;
            border: 6px solid transparent;
            border-color: #fff transparent transparent transparent;
        }

        /*point the arrow upwards when the select box is open (active):*/
        .select-selected.select-arrow-active:after {
            border-color: transparent transparent #fff transparent;
            top: 7px;
        }

        /*style the items (options), including the selected item:*/
        .select-items div,
        .select-selected {
            color: #ffffff;
            padding: 8px 16px;
            border: 1px solid transparent;
            border-color: transparent transparent rgba(0, 0, 0, 0.1) transparent;
            cursor: pointer;
            user-select: none;
        }

        /*style items (options):*/
        .select-items {
            position: absolute;
            background-color: rgb(52, 48, 48);
            top: 100%;
            left: 0;
            right: 0;
            z-index: 99;
        }

        /*hide the items when the select box is closed:*/
        .select-hide {
            display: none;
        }

        .select-items div:hover,
        .same-as-selected {
            background-color: rgba(0, 0, 0, 0.1);
        }

        /* -------------------------combobox end--------------------------- */
       /* ----------------slide pannel start-------------- */

       .sidepanel {
            width: 0;
            position: fixed;
            z-index: 1;
            height: 250px;
            top: 0;
            left: 0;
            background-color: #111;
            overflow-x: hidden;
            transition: 0.5s;
            padding-top: 60px;
        }

        .sidepanel a {
            padding: 8px 8px 8px 32px;
            text-decoration: none;
            font-size: 12px;
            color: #818181;
            display: block;
            transition: 0.3s;
        }

        .sidepanel a:hover {
            color: #f1f1f1;
        }

        .sidepanel .closebtn {
            position: absolute;
            top: 0;
            right: 25px;
            font-size: 36px;
        }

        .openbtn {
            font-size: 20px;
            cursor: pointer;
            background-color: #111;
            color: white;
            padding: 10px 15px;
            border: none;
        }

        .openbtn:hover {
            background-color: #444;
        }

        /* ----------------slide pannel end-------------- */

        /* -----------media query----------- */
        /* media query */
        @media only screen and (min-width:1212px) and (max-width:1600px) {
          
          .openbtn { 
             display: none; 
          }
      }

     /* media query for galaxy s9 android 7.0  */
     @media only screen and (min-width:300px) and (max-width: 380px) {
        .impl_menu_wrapper {
              display: none;
          }

          .openbtn {
              display: inline-block;
          }

      }

       /* media query for plus */
       @media only screen and (min-width:380px) and (max-width: 420px) {
          .impl_menu_wrapper {
              display: none;
          }

          .openbtn {
              display: inline-block;
          }
      }

      /* media query for ipad */
      @media only screen and (max-width:900px) and (min-width: 420px) {
           .impl_menu_wrapper {
              display: none;
          }

          .openbtn {
              display: inline-block;
          }
      
          }
          
    
   
    </style>

</head>

<body>
        <!------ Preloader Start ------>
        <div id="preloader">
            <div id="status">
    
                <div class="loader">
                    Loading...
                    <div class="ball"></div>
                    <div class="ball"></div>
                    <div class="ball"></div>
                </div>
            </div>
        </div>
    
        <!-- -------slide pannel----------- -->
        <div id="mySidepanel" class="sidepanel">
            <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">×</a>
            <li><a href="index.html">Home</a></li>
            <li> <a href="javascript:;">Pages</a>
                <ul class="" style="width: 250px;  ">
                    <li><a href="sell_step.html">
                            Sell Your Beep
                        </a></li>
                    <li><a href="shop.html">
                            Shop
                        </a></li>
                    <li><a href="purchase_autoparts.html">
                            Auto Parts & Accessories
                        </a></li>
                    <li><a href="#">
                            Auto Services
                        </a></li>
                </ul>
            </li>
            <a href="#">Contact us</a>
            <li> <a href="javascript:;">Select Language</a>
                <ul class="">
                    <li><a href="">
                            Sinhala
                        </a></li>
                    <li><a href="">
                            English
                        </a></li>
                    <li><a href="">
                            Tamil
                        </a></li>
                </ul>
            </li>
        </div>
    
        <button class="openbtn" onclick="openNav()">☰ </button>
    
 

    <!------ Sell wrapper  Start ------>
    <div class="impl_sell_wrapper">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12">
                    <div class="impl_heading">
                        <h1>Fill Details To Add Post</h1>
                    </div>
                </div>
                <div class="col-lg-12 col-md-12">
				<form id="impl_sform" action="#">
				  <div class="impl_steps_wrapper">
						
							<div class="impl_step">
                            <h2 class="step-title">Contact Details</h2>
                            <div class="row">
                                <div class="col-lg-6 col-md-6">
                                    <div class="form-group">
                                        <input id="userName" name="userName" type="text" class="form-control required" placeholder="YOUR NAME*">
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6">
                                    <div class="form-group">
                                        <input id="step_mobile" type="text" name="mobile" class="form-control required number" placeholder="YOUR MOBILE*"> 
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6">
                                    <div class="form-group">
                                        <input id="step_mail" type="text" name="email" class="form-control required email" placeholder="YOUR EMAIL*" data-valid="email" data-error="Email should be valid.">
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6">
                                    <div class="form-group">
                                        <input id="step_city" type="text" name="city" class="form-control required" placeholder="CITY">
                                    </div>
                                </div>
                             
                            </div>
                      </div>
						</section>
					
					<section>
							<div class="impl_step">
                            <h2 class="step-title">Car Details</h2>
                            <div class="row">
                        
                                <div class="col-lg-6 col-md-6">
                                    <div class="form-group">
                                         <input type="radio" id="rbn1" name="ads">
                                           <label class="custom-control-label" for="SmartAds">SMART ADS</label>
                                    </div>
                                </div>
                                	<div class="col-lg-6 col-md-6">
                                    <div class="form-group">
                                        <input type="radio" id="rbn2" name="ads" >
                                             <label class="custom-control-label" for="NormalAds">NORMAL ADS</label>
                                    </div>
                                </div>
                                   <div class="col-lg-6 col-md-6">
                                    <div class="form-group">
                                    <p>CONDITION</p>
                                         <input type="radio" id="rbn1" name="ads">
                                           <label class="custom-control-label" for="SmartAds">USED</label><br>
                                             <input type="radio" id="rbn2" name="ads" >
                                             <label class="custom-control-label" for="NormalAds">NEW</label>
                                    </div>
                                </div>
                                	<div class="col-lg-6 col-md-6">
                                    <div class="form-group">
                                      
                                    </div>
                                </div>
								<div class="col-lg-6 col-md-6">
                                    <div class="form-group">
                                        <input id="step_brand" type="text" name="BRND" class="form-control required" placeholder="CAR BRAND">
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6">
                                    <div class="form-group">
                                        <input id="step_modal" type="text" name="model" class="form-control required" placeholder="MODEL">
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6">
                                    <div class="form-group">
                                        <input id="step_year" type="text" name="year" class="form-control required number" placeholder="YEAR">
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6">
                                    <div class="form-group">
                                        <input id="step_meter" type="text" name="meter" class="form-control required" placeholder="ENGINE CAPACITY">
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6">
                                    <div class="form-group">  
                                        <input id="step_color" type="text" name="color" class="form-control required" placeholder="COLOR">
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6">
                                    <div class="form-group">
                                        <input id="step_price" type="text" name="price" class="form-control required" placeholder="PRICE">
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6">
                                    <div class="form-group">
                                        <input id="step_price" type="text" name="price" class="form-control required" placeholder="TRANSMISSION">
                                    </div>
                                </div>
                                 <div class="col-lg-6 col-md-6">
                                    <div class="form-group">
                                        <input id="step_price" type="text" name="price" class="form-control required" placeholder="MILEAGE">
                                    </div>
                                </div>
                                 <div class="col-lg-6 col-md-6">
                                    <div class="form-group">
                                        <input id="step_price" type="text" name="price" class="form-control required" placeholder="FUEL TYPE">
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6">
                                    <div class="form-group">
                                        <input id="step_price" type="text" name="price" class="form-control required" placeholder="BODY TYPE">
                                    </div>
                                </div>
                                
                                <div class="input-group col-lg-12 col-md-12">
                                       <textarea class="form-control" aria-label="With textarea" placeholder="DESCRIPTION"></textarea>
                                </div>

                                 <div class="col-lg-12 col-md-12">
                                     <div class="form-group">
                                     <div id="fuMultipleFile" class="col-lg-12 layout-spacing" style="margin-top: 5%;">
                            <div class="statbox widget box box-shadow">
                               
                                <div class="widget-content widget-content-area">
                                    <div class="custom-file-container" data-upload-id="mySecondImage">
                                        <label>Upload (Allow Multiple) <a href="javascript:void(0)" class="custom-file-container__image-clear" title="Clear Image">x</a></label>
                                        <label class="custom-file-container__custom-file" >
                                            <input type="file" class="custom-file-container__custom-file__custom-file-input" multiple>
                                            <input type="hidden" name="MAX_FILE_SIZE" value="10485760" />
                                            <span class="custom-file-container__custom-file__custom-file-control"></span>
                                        </label>
                                        <div class="custom-file-container__image-preview"></div>
                                    </div>

                                    <div class="code-section-container">
                                   

                                        <div class="code-section text-left">
                                            <pre>


                                                    &lt;div class="custom-file-container" data-upload-id="mySecondImage"&gt;
                                                     &lt;label&gt;Upload (Allow Multiple) &lt;a href="javascript:void(0)" class="custom-file-container__image-clear" title="Clear Image"&gt;x&lt;/a&gt;&lt;/label&gt;
                                                     &lt;label class="custom-file-container__custom-file" &gt;
                                                    &lt;input type="file" class="custom-file-container__custom-file__custom-file-input" multiple&gt;
                                                        &lt;input type="hidden" name="MAX_FILE_SIZE" value="10485760" /&gt;
                                                        &lt;span class="custom-file-container__custom-file__custom-file-control"&gt;&lt;/span&gt;
                                                      &lt;/label&gt;
                                                  &lt;div class="custom-file-container__image-preview"&gt;&lt;/div&gt;
                                                  &lt;/div&gt;
                                                    </pre>
                                        </div>
                                    </div>


                                  

                                </div>
                            </div>
                        </div>
                                      </div>
                                </div>
                            </div>
					    </section>
						
					
						
					</div>
				</form>
              </div>
            </div>
        </div>
    </div>
 
   <div>
     <script src="{{asset('BackEnd//js/libs/jquery-3.1.1.min.js')}}"></script>
    <script src="{{asset('BackEnd/bootstrap/js/popper.min.js')}}"></script>
    <script src="{{asset('BackEnd/bootstrap/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('BackEnd/plugins/perfect-scrollbar/perfect-scrollbar.min.js')}}"></script>
    <script src="{{asset('BackEnd/plugins/blockui/jquery.blockUI.min.js')}}"></script>
    <script src="{{asset('BackEnd/assets/js/app.js')}}"></script>
    <script src="{{asset('BackEnd/plugins/highlight/highlight.pack.js')}}"></script>

     <script src="{{asset('BackEnd/assets/js/scrollspyNav.js')}}"></script>
    <script>
        var secondUpload = new FileUploadWithPreview('mySecondImage')
    </script>
       <script>
        $(document).ready(function() {
            App.init();
        });
    </script>
    <script src="{{asset('BackEnd/plugins/highlight/highlight.pack.js')}}"></script>
    <script src="{{asset('BackEnd/assets/js/custom.js')}}"></script>
 
    </div>
    @include('Frontend.Template.footer') 
</body>


<!-- Mirrored from kamleshyadav.com/html/impel/template/sell_step.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 13 Dec 2020 16:54:25 GMT -->
</html>