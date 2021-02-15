<!DOCTYPE html>
<html lang="en">

<head>

   
     <!-- CSRF Token -->
     <meta name="csrf-token" content="{{ csrf_token() }}"> 
     @include('Frontend.Template.header')


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

            .select-selected {
                padding-bottom: 1px;
                padding-top: 3px;
            }

        }
    </style>





    <style>
        t1:hover {
            color: red;
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

  

    <!------ Breadcrumbs Start ------>
    <div class="impl_bread_wrapper">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12">
                    <h1>purchase</h1>
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">purchase</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
    <!------ Purchase new section Start ------>
    <div class="impl_purchase_wrapper">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12">
                    <div class="impl_heading">
                        <h1 class="topic">Beep autoparts</h1></br>
                    </div>
                </div>
                <div class="col-lg-9 col-md-9">
                    <div class="impl_sorting_text custom_select">
                        <div class="impl_footer_subs">
                            <input type="text" class="form-control" placeholder="Search...">
                            <button class="foo_subs_btn"><i class="fa fa-search" aria-hidden="true"></i></button>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3">
                    <div class="impl_sorting_text custom_select">
                        <div class="impl_select_wrapper">
                            <span>sort by</span>
                            <select style="margin-top: 10px;padding-left: 0px;margin-left: -5%;">
                                <option value="1">Newest to Oldest</option>
                                <option value="2">Lowest to highest Price</option>
                                <option value="3">Lowest to highest mileage </option>

                            </select>
                        </div>
                    </div>
                </div>
                <div class="col-lg-12 col-md-12">
                    <div class="impl_purchase_inner">
                        <div class="row">
                            <div class="col-lg-9 col-md-8">
                                <div class="row">
                                    <div class="col-lg-12 col-md-12" style="margin-bottom: 10px;">
                                        <div class="impl_buy_wrapper"
                                            style="background-color:rgb(122, 15, 0) ; padding-top: 15px;padding-bottom: 15px;">
                                            <div class="container">
                                                <div class="row">
                                                    <div class="col-lg-6 col-md-12">
                                                        <div class="impl_buycar_wrapper">
                                                            <div class="impl_buycar_color" id="color_car">
                                                                <div class="slider slider-for1">
                                                                    <div><img src="{{asset('FrontEnd/assets/Fimg/images/purchase/car1.png')}}" alt="">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-6 col-md-12">
                                                        <div class="impl_buycar_data"
                                                            style="padding-top: 0px;padding-left: 0px;">
                                                            <div class="impl_old_buy_btn" style="text-align: right;">
                                                                <a href="" class=""><img src="{{asset('FrontEnd/assets/Fimg/images/topad%20logo.png')}}"
                                                                        alt="profile" width="30" height="30"></a>

                                                            </div>
                                                            <h7>Expedition</h7>
                                                            <h1>Expedition , Centaur </h1>
                                                            <div class="car_emi_wrapper">
                                                                <div class="row">
                                                                    <div class="col-md-3">
                                                                        <p style="margin-top: 0px;margin-bottom: 5px;">
                                                                            Colombo</p>
                                                                        <h6> Mileage:25,000km</h6>
                                                                    </div>
                                                           
                                                                </div>

                                                            </div>
                                                            <div class="impl_old_buy_btn" style="padding-top: 10px;">
                                                                <a href="" class="impl_btn"
                                                                    style="margin-right: 0px;width: 55%;">Price</a>
                                                                <a href="purchase_new_single.html" class="impl_btn"
                                                                    style="margin-right: 0px;margin-left: 10px;">View Details</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-12 col-md-12" style="margin-bottom: 10px;">
                                        <div class="impl_buy_wrapper"
                                            style="background-color:rgb(52, 48, 48); padding-top: 15px;padding-bottom: 15px;">
                                            <div class="container">
                                                <div class="row">
                                                    <div class="col-lg-6 col-md-12">
                                                        <div class="impl_buycar_wrapper">
                                                            <div class="impl_buycar_color" id="color_car">
                                                                <div class="slider slider-for1">
                                                                    <div><img src="{{asset('FrontEnd/assets/Fimg/images/purchase/car1.png')}}" alt="">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-6 col-md-12">
                                                        <div class="impl_buycar_data"
                                                            style="padding-top: 0px;padding-left: 0px;">
                                                       
                                                            <h7>Expedition</h7>
                                                            <h1>Expedition , Centaur </h1>
                                                            <div class="car_emi_wrapper">
                                                                <div class="row">
                                                                    <div class="col-md-3">
                                                                        <p style="margin-top: 0px;margin-bottom: 5px;">
                                                                            Mileage</p>
                                                                        <h6>Starts On</h6>
                                                                    </div>
                                                                    <div class="col-md-3">
                                                                        <p style="margin-top: 0px;margin-bottom: 5px;">
                                                                            Mileage</p>
                                                                        <h6>Starts On</h6>
                                                                    </div>
                                                                    <div class="col-md-3">
                                                                        <p style="margin-top: 0px;margin-bottom: 5px;">
                                                                            Mileage</p>
                                                                        <h6>Starts On</h6>
                                                                    </div>
                                                                    <div class="col-md-3">
                                                                        <p style="margin-top: 0px;margin-bottom: 5px;">
                                                                            Mileage</p>
                                                                        <h6>Starts On</h6>
                                                                    </div>
                                                                </div>

                                                            </div>
                                                            <div class="impl_old_buy_btn" style="padding-top: 10px;">
                                                                <a href="" class="impl_btn"
                                                                    style="margin-right: 0px;width: 55%;">Price</a>
                                                                <a href="purchase_new_single.html" class="impl_btn"
                                                                    style="margin-right: 0px;margin-left: 10px;">View Details</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-12 col-md-12" style="margin-bottom: 10px;">
                                        <div class="impl_buy_wrapper"
                                            style="background-color:rgb(52, 48, 48); padding-top: 15px;padding-bottom: 15px;">
                                            <div class="container">
                                                <div class="row">
                                                    <div class="col-lg-6 col-md-12">
                                                        <div class="impl_buycar_wrapper">
                                                            <div class="impl_buycar_color" id="color_car">
                                                                <div class="slider slider-for1">
                                                                    <div><img src="{{asset('FrontEnd/assets/Fimg/images/purchase/car1.png')}}" alt="">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-6 col-md-12">
                                                        <div class="impl_buycar_data"
                                                            style="padding-top: 0px;padding-left: 0px;">
                                                       
                                                            <h7>Expedition</h7>
                                                            <h1>Expedition , Centaur </h1>
                                                            <div class="car_emi_wrapper">
                                                                <div class="row">
                                                                    <div class="col-md-3">
                                                                        <p style="margin-top: 0px;margin-bottom: 5px;">
                                                                            Colombo</p>
                                                                        <h6> Mileage:25,000km</h6>
                                                                    </div>
                                                                </div>

                                                            </div>
                                                            <div class="impl_old_buy_btn" style="padding-top: 10px;">
                                                                <a href="" class="impl_btn"
                                                                    style="margin-right: 0px;width: 55%;">Price</a>
                                                                <a href="purchase_new_single.html" class="impl_btn"
                                                                    style="margin-right: 0px;margin-left: 10px;">View Details</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-12 col-md-12" style="margin-bottom: 10px;">
                                        <div class="impl_buy_wrapper"
                                            style="background-color:rgb(52, 48, 48); padding-top: 15px;padding-bottom: 15px;">
                                            <div class="container">
                                                <div class="row">
                                                    <div class="col-lg-6 col-md-12">
                                                        <div class="impl_buycar_wrapper">
                                                            <div class="impl_buycar_color" id="color_car">
                                                                <div class="slider slider-for1">
                                                                    <div><img src="{{asset('FrontEnd/assets/Fimg/images/purchase/car1.png')}}" alt="">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-6 col-md-12">
                                                        <div class="impl_buycar_data"
                                                            style="padding-top: 0px;padding-left: 0px;">
                                                       
                                                            <h7>Expedition</h7>
                                                            <h1>Expedition , Centaur </h1>
                                                            <div class="car_emi_wrapper">
                                                                <div class="row">
                                                                    <div class="col-md-3">
                                                                        <p style="margin-top: 0px;margin-bottom: 5px;">
                                                                            Colombo</p>
                                                                        <h6> Mileage:25,000km</h6>
                                                                    </div>
                                                         
                                                                </div>

                                                            </div>
                                                            <div class="impl_old_buy_btn" style="padding-top: 10px;">
                                                                <a href="" class="impl_btn"
                                                                    style="margin-right: 0px;width: 55%;">Price</a>
                                                                <a href="purchase_new_single.html" class="impl_btn"
                                                                    style="margin-right: 0px;margin-left: 10px;">View Details</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-12 col-md-12" style="margin-bottom: 10px;">
                                        <div class="impl_buy_wrapper"
                                            style="background-color:rgb(52, 48, 48); padding-top: 15px;padding-bottom: 15px;">
                                            <div class="container">
                                                <div class="row">
                                                    <div class="col-lg-6 col-md-12">
                                                        <div class="impl_buycar_wrapper">
                                                            <div class="impl_buycar_color" id="color_car">
                                                                <div class="slider slider-for1">
                                                                    <div><img src="{{asset('FrontEnd/assets/Fimg/images/purchase/car1.png')}}" alt="">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-6 col-md-12">
                                                        <div class="impl_buycar_data"
                                                            style="padding-top: 0px;padding-left: 0px;">
                                                       
                                                            <h7>Expedition</h7>
                                                            <h1>Expedition , Centaur </h1>
                                                            <div class="car_emi_wrapper">
                                                                <div class="row">
                                                                    <div class="col-md-3">
                                                                        <p style="margin-top: 0px;margin-bottom: 5px;">
                                                                            Colombo</p>
                                                                        <h6> Mileage:25,000km</h6>
                                                                    </div>
                                                         
                                                                </div>

                                                            </div>
                                                            <div class="impl_old_buy_btn" style="padding-top: 10px;">
                                                                <a href="" class="impl_btn"
                                                                    style="margin-right: 0px;width: 55%;">Price</a>
                                                                <a href="purchase_new_single.html" class="impl_btn"
                                                                    style="margin-right: 0px;margin-left: 10px;">View Details</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-12 col-md-12" style="margin-bottom: 10px;">
                                        <div class="impl_buy_wrapper"
                                            style="background-color:rgb(52, 48, 48); padding-top: 15px;padding-bottom: 15px;">
                                            <div class="container">
                                                <div class="row">
                                                    <div class="col-lg-6 col-md-12">
                                                        <div class="impl_buycar_wrapper">
                                                            <div class="impl_buycar_color" id="color_car">
                                                                <div class="slider slider-for1">
                                                                    <div><img src="{{asset('FrontEnd/assets/Fimg/images/purchase/car1.png')}}" alt="">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-6 col-md-12">
                                                        <div class="impl_buycar_data"
                                                            style="padding-top: 0px;padding-left: 0px;">
                                                       
                                                            <h7>Expedition</h7>
                                                            <h1>Expedition , Centaur </h1>
                                                            <div class="car_emi_wrapper">
                                                                <div class="row">
                                                                    <div class="col-md-3">
                                                                        <p style="margin-top: 0px;margin-bottom: 5px;">
                                                                            Colombo</p>
                                                                        <h6> Mileage:25,000km</h6>
                                                                    </div>
                                                         
                                                                </div>

                                                            </div>
                                                            <div class="impl_old_buy_btn" style="padding-top: 10px;">
                                                                <a href="" class="impl_btn"
                                                                    style="margin-right: 0px;width: 55%;">Price</a>
                                                                <a href="purchase_new_single.html" class="impl_btn"
                                                                    style="margin-right: 0px;margin-left: 10px;">View Details</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-12 col-md-12" style="margin-bottom: 10px;">
                                        <div class="impl_buy_wrapper"
                                            style="background-color:rgb(52, 48, 48); padding-top: 15px;padding-bottom: 15px;">
                                            <div class="container">
                                                <div class="row">
                                                    <div class="col-lg-6 col-md-12">
                                                        <div class="impl_buycar_wrapper">
                                                            <div class="impl_buycar_color" id="color_car">
                                                                <div class="slider slider-for1">
                                                                    <div><img src="{{asset('FrontEnd/assets/Fimg/images/purchase/car1.png')}}"" alt="">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-6 col-md-12">
                                                        <div class="impl_buycar_data"
                                                            style="padding-top: 0px;padding-left: 0px;">
                                                       
                                                            <h7>Expedition</h7>
                                                            <h1>Expedition , Centaur </h1>
                                                            <div class="car_emi_wrapper">
                                                                <div class="row">
                                                                    <div class="col-md-3">
                                                                        <p style="margin-top: 0px;margin-bottom: 5px;">
                                                                            Mileage</p>
                                                                        <h6>Starts On</h6>
                                                                    </div>
                                                         
                                                                </div>

                                                            </div>
                                                            <div class="impl_old_buy_btn" style="padding-top: 10px;">
                                                                <a href="" class="impl_btn"
                                                                    style="margin-right: 0px;width: 55%;">Price</a>
                                                                <a href="purchase_new_single.html" class="impl_btn"
                                                                    style="margin-right: 0px;margin-left: 10px;">View Details</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-12 col-md-12" style="margin-bottom: 10px;">
                                        <div class="impl_buy_wrapper"
                                            style="background-color:rgb(52, 48, 48); padding-top: 15px;padding-bottom: 15px;">
                                            <div class="container">
                                                <div class="row">
                                                    <div class="col-lg-6 col-md-12">
                                                        <div class="impl_buycar_wrapper">
                                                            <div class="impl_buycar_color" id="color_car">
                                                                <div class="slider slider-for1">
                                                                    <div><img src="{{asset('FrontEnd/assets/Fimg/images/purchase/car1.png')}}" alt="">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-6 col-md-12">
                                                        <div class="impl_buycar_data"
                                                            style="padding-top: 0px;padding-left: 0px;">
                                                       
                                                            <h7>Expedition</h7>
                                                            <h1>Expedition , Centaur </h1>
                                                            <div class="car_emi_wrapper">
                                                                <div class="row">
                                                                    <div class="col-md-3">
                                                                        <p style="margin-top: 0px;margin-bottom: 5px;">
                                                                            Colombo</p>
                                                                        <h6> Mileage:25,000km</h6>
                                                                    </div>
                                                         
                                                                </div>

                                                            </div>
                                                            <div class="impl_old_buy_btn" style="padding-top: 10px;">
                                                                <a href="" class="impl_btn"
                                                                    style="margin-right: 0px;width: 55%;">Price</a>
                                                                <a href="purchase_new_single.html" class="impl_btn"
                                                                    style="margin-right: 0px;margin-left: 10px;">View Details</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-12 col-md-12" style="margin-bottom: 10px;">
                                        <div class="impl_buy_wrapper"
                                            style="background-color:rgb(52, 48, 48); padding-top: 15px;padding-bottom: 15px;">
                                            <div class="container">
                                                <div class="row">
                                                    <div class="col-lg-6 col-md-12">
                                                        <div class="impl_buycar_wrapper">
                                                            <div class="impl_buycar_color" id="color_car">
                                                                <div class="slider slider-for1">
                                                                    <div><img src="{{asset('FrontEnd/assets/Fimg/images/purchase/car1.png')}}" alt="">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-6 col-md-12">
                                                        <div class="impl_buycar_data"
                                                            style="padding-top: 0px;padding-left: 0px;">
                                                       
                                                            <h7>Expedition</h7>
                                                            <h1>Expedition , Centaur </h1>
                                                            <div class="car_emi_wrapper">
                                                                <div class="row">
                                                                    <div class="col-md-3">
                                                                        <p style="margin-top: 0px;margin-bottom: 5px;">
                                                                            Colombo</p>
                                                                        <h6> Mileage:25,000km</h6>
                                                                    </div>
                                                         
                                                                </div>

                                                            </div>
                                                            <div class="impl_old_buy_btn" style="padding-top: 10px;">
                                                                <a href="" class="impl_btn"
                                                                    style="margin-right: 0px;width: 55%;">Price</a>
                                                                <a href="purchase_new_single.html" class="impl_btn"
                                                                    style="margin-right: 0px;margin-left: 10px;">View Details</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-12 col-md-12" style="margin-bottom: 10px;">
                                        <div class="impl_buy_wrapper"
                                            style="background-color:rgb(52, 48, 48); padding-top: 15px;padding-bottom: 15px;">
                                            <div class="container">
                                                <div class="row">
                                                    <div class="col-lg-6 col-md-12">
                                                        <div class="impl_buycar_wrapper">
                                                            <div class="impl_buycar_color" id="color_car">
                                                                <div class="slider slider-for1">
                                                                    <div><img src="{{asset('FrontEnd/assets/Fimg/images/purchase/car1.png')}}" alt="">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-6 col-md-12">
                                                        <div class="impl_buycar_data"
                                                            style="padding-top: 0px;padding-left: 0px;">
                                                       
                                                            <h7>Expedition</h7>
                                                            <h1>Expedition , Centaur </h1>
                                                            <div class="car_emi_wrapper">
                                                                <div class="row">
                                                                    <div class="col-md-3">
                                                                        <p style="margin-top: 0px;margin-bottom: 5px;">
                                                                            Colombo</p>
                                                                        <h6> Mileage:25,000km</h6>
                                                                    </div>
                                                         
                                                                </div>

                                                            </div>
                                                            <div class="impl_old_buy_btn" style="padding-top: 10px;">
                                                                <a href="" class="impl_btn"
                                                                    style="margin-right: 0px;width: 55%;">Price</a>
                                                                <a href="purchase_new_single.html" class="impl_btn"
                                                                    style="margin-right: 0px;margin-left: 10px;">View Details</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-12 col-md-12" style="margin-bottom: 10px;">
                                        <div class="impl_buy_wrapper"
                                            style="background-color:rgb(52, 48, 48); padding-top: 15px;padding-bottom: 15px;">
                                            <div class="container">
                                                <div class="row">
                                                    <div class="col-lg-6 col-md-12">
                                                        <div class="impl_buycar_wrapper">
                                                            <div class="impl_buycar_color" id="color_car">
                                                                <div class="slider slider-for1">
                                                                    <div><img src="{{asset('FrontEnd/assets/Fimg/images/purchase/car1.png')}}" alt="">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-6 col-md-12">
                                                        <div class="impl_buycar_data"
                                                            style="padding-top: 0px;padding-left: 0px;">
                                                       
                                                            <h7>Expedition</h7>
                                                            <h1>Expedition , Centaur </h1>
                                                            <div class="car_emi_wrapper">
                                                                <div class="row">
                                                                    <div class="col-md-3">
                                                                        <p style="margin-top: 0px;margin-bottom: 5px;">
                                                                            Colombo</p>
                                                                        <h6> Mileage:25,000km</h6>
                                                                    </div>
                                                         
                                                                </div>

                                                            </div>
                                                            <div class="impl_old_buy_btn" style="padding-top: 10px;">
                                                                <a href="" class="impl_btn"
                                                                    style="margin-right: 0px;width: 55%;">Price</a>
                                                                <a href="purchase_new_single.html" class="impl_btn"
                                                                    style="margin-right: 0px;margin-left: 10px;">View Details</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-12 col-md-12" style="margin-bottom: 10px;">
                                        <div class="impl_buy_wrapper"
                                            style="background-color:rgb(52, 48, 48); padding-top: 15px;padding-bottom: 15px;">
                                            <div class="container">
                                                <div class="row">
                                                    <div class="col-lg-6 col-md-12">
                                                        <div class="impl_buycar_wrapper">
                                                            <div class="impl_buycar_color" id="color_car">
                                                                <div class="slider slider-for1">
                                                                    <div><img src="{{asset('FrontEnd/assets/Fimg/images/purchase/car1.png')}}" alt="">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-6 col-md-12">
                                                        <div class="impl_buycar_data"
                                                            style="padding-top: 0px;padding-left: 0px;">
                                                       
                                                            <h7>Expedition</h7>
                                                            <h1>Expedition , Centaur </h1>
                                                            <div class="car_emi_wrapper">
                                                                <div class="row">
                                                                    <div class="col-md-3">
                                                                        <p style="margin-top: 0px;margin-bottom: 5px;">
                                                                            Colombo</p>
                                                                        <h6> Mileage:25,000km</h6>
                                                                    </div>
                                                         
                                                                </div>

                                                            </div>
                                                            <div class="impl_old_buy_btn" style="padding-top: 10px;">
                                                                <a href="" class="impl_btn"
                                                                    style="margin-right: 0px;width: 55%;">Price</a>
                                                                <a href="purchase_new_single.html" class="impl_btn"
                                                                    style="margin-right: 0px;margin-left: 10px;">View Details</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-12 col-md-12" style="margin-bottom: 10px;">
                                        <div class="impl_buy_wrapper"
                                            style="background-color:rgb(52, 48, 48); padding-top: 15px;padding-bottom: 15px;">
                                            <div class="container">
                                                <div class="row">
                                                    <div class="col-lg-6 col-md-12">
                                                        <div class="impl_buycar_wrapper">
                                                            <div class="impl_buycar_color" id="color_car">
                                                                <div class="slider slider-for1">
                                                                    <div><img src="{{asset('FrontEnd/assets/Fimg/images/purchase/car1.png')}}" alt="">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-6 col-md-12">
                                                        <div class="impl_buycar_data"
                                                            style="padding-top: 0px;padding-left: 0px;">
                                                       
                                                            <h7>Expedition</h7>
                                                            <h1>Expedition , Centaur </h1>
                                                            <div class="car_emi_wrapper">
                                                                <div class="row">
                                                                    <div class="col-md-3">
                                                                        <p style="margin-top: 0px;margin-bottom: 5px;">
                                                                            Colombo</p>
                                                                        <h6> Mileage:25,000km</h6>
                                                                    </div>
                                                         
                                                                </div>

                                                            </div>
                                                            <div class="impl_old_buy_btn" style="padding-top: 10px;">
                                                                <a href="" class="impl_btn"
                                                                    style="margin-right: 0px;width: 55%;">Price</a>
                                                                <a href="purchase_new_single.html" class="impl_btn"
                                                                    style="margin-right: 0px;margin-left: 10px;">View Details</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-12 col-md-12" style="margin-bottom: 10px;">
                                        <div class="impl_buy_wrapper"
                                            style="background-color:rgb(52, 48, 48); padding-top: 15px;padding-bottom: 15px;">
                                            <div class="container">
                                                <div class="row">
                                                    <div class="col-lg-6 col-md-12">
                                                        <div class="impl_buycar_wrapper">
                                                            <div class="impl_buycar_color" id="color_car">
                                                                <div class="slider slider-for1">
                                                                    <div><img src="{{asset('FrontEnd/assets/Fimg/images/purchase/car1.png')}}" alt="">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-6 col-md-12">
                                                        <div class="impl_buycar_data"
                                                            style="padding-top: 0px;padding-left: 0px;">
                                                       
                                                            <h7>Expedition</h7>
                                                            <h1>Expedition , Centaur </h1>
                                                            <div class="car_emi_wrapper">
                                                                <div class="row">
                                                                    <div class="col-md-3">
                                                                        <p style="margin-top: 0px;margin-bottom: 5px;">
                                                                            Colombo</p>
                                                                        <h6> Mileage:25,000km</h6>
                                                                    </div>
                                                         
                                                                </div>

                                                            </div>
                                                            <div class="impl_old_buy_btn" style="padding-top: 10px;">
                                                                <a href="" class="impl_btn"
                                                                    style="margin-right: 0px;width: 55%;">Price</a>
                                                                <a href="purchase_new_single.html" class="impl_btn"
                                                                    style="margin-right: 0px;margin-left: 10px;">View Details</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-12 col-md-12" style="margin-bottom: 10px;">
                                        <div class="impl_buy_wrapper"
                                            style="background-color:rgb(52, 48, 48); padding-top: 15px;padding-bottom: 15px;">
                                            <div class="container">
                                                <div class="row">
                                                    <div class="col-lg-6 col-md-12">
                                                        <div class="impl_buycar_wrapper">
                                                            <div class="impl_buycar_color" id="color_car">
                                                                <div class="slider slider-for1">
                                                                    <div><img src="{{asset('FrontEnd/assets/Fimg/images/purchase/car1.png')}}" alt="">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-6 col-md-12">
                                                        <div class="impl_buycar_data"
                                                            style="padding-top: 0px;padding-left: 0px;">
                                                       
                                                            <h7>Expedition</h7>
                                                            <h1>Expedition , Centaur </h1>
                                                            <div class="car_emi_wrapper">
                                                                <div class="row">
                                                                    <div class="col-md-3">
                                                                        <p style="margin-top: 0px;margin-bottom: 5px;">
                                                                            Colombo</p>
                                                                        <h6> Mileage:25,000km</h6>
                                                                    </div>
                                                         
                                                                </div>

                                                            </div>
                                                            <div class="impl_old_buy_btn" style="padding-top: 10px;">
                                                                <a href="" class="impl_btn"
                                                                    style="margin-right: 0px;width: 55%;">Price</a>
                                                                <a href="purchase_new_single.html" class="impl_btn"
                                                                    style="margin-right: 0px;margin-left: 10px;">View Details</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-12 col-md-12" style="margin-bottom: 10px;">
                                        <div class="impl_buy_wrapper"
                                            style="background-color:rgb(52, 48, 48); padding-top: 15px;padding-bottom: 15px;">
                                            <div class="container">
                                                <div class="row">
                                                    <div class="col-lg-6 col-md-12">
                                                        <div class="impl_buycar_wrapper">
                                                            <div class="impl_buycar_color" id="color_car">
                                                                <div class="slider slider-for1">
                                                                    <div><img src="{{asset('FrontEnd/assets/Fimg/images/purchase/car1.png')}}" alt="">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-6 col-md-12">
                                                        <div class="impl_buycar_data"
                                                            style="padding-top: 0px;padding-left: 0px;">
                                                       
                                                            <h7>Expedition</h7>
                                                            <h1>Expedition , Centaur </h1>
                                                            <div class="car_emi_wrapper">
                                                                <div class="row">
                                                                    <div class="col-md-3">
                                                                        <p style="margin-top: 0px;margin-bottom: 5px;">
                                                                            Colombo</p>
                                                                        <h6> Mileage:25,000km</h6>
                                                                    </div>
                                                         
                                                                </div>

                                                            </div>
                                                            <div class="impl_old_buy_btn" style="padding-top: 10px;">
                                                                <a href="" class="impl_btn"
                                                                    style="margin-right: 0px;width: 55%;">Price</a>
                                                                <a href="purchase_new_single.html" class="impl_btn"
                                                                    style="margin-right: 0px;margin-left: 10px;">View Details</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-12 col-md-12" style="margin-bottom: 10px;">
                                        <div class="impl_buy_wrapper"
                                            style="background-color:rgb(52, 48, 48); padding-top: 15px;padding-bottom: 15px;">
                                            <div class="container">
                                                <div class="row">
                                                    <div class="col-lg-6 col-md-12">
                                                        <div class="impl_buycar_wrapper">
                                                            <div class="impl_buycar_color" id="color_car">
                                                                <div class="slider slider-for1">
                                                                    <div><img src="{{asset('FrontEnd/assets/Fimg/images/purchase/car1.png')}}" alt="">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-6 col-md-12">
                                                        <div class="impl_buycar_data"
                                                            style="padding-top: 0px;padding-left: 0px;">
                                                       
                                                            <h7>Expedition</h7>
                                                            <h1>Expedition , Centaur </h1>
                                                            <div class="car_emi_wrapper">
                                                                <div class="row">
                                                                    <div class="col-md-3">
                                                                        <p style="margin-top: 0px;margin-bottom: 5px;">
                                                                            Colombo</p>
                                                                        <h6> Mileage:25,000km</h6>
                                                                    </div>
                                                         
                                                                </div>

                                                            </div>
                                                            <div class="impl_old_buy_btn" style="padding-top: 10px;">
                                                                <a href="" class="impl_btn"
                                                                    style="margin-right: 0px;width: 55%;">Price</a>
                                                                <a href="purchase_new_single.html" class="impl_btn"
                                                                    style="margin-right: 0px;margin-left: 10px;">View Details</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-12 col-md-12" style="margin-bottom: 10px;">
                                        <div class="impl_buy_wrapper"
                                            style="background-color:rgb(52, 48, 48); padding-top: 15px;padding-bottom: 15px;">
                                            <div class="container">
                                                <div class="row">
                                                    <div class="col-lg-6 col-md-12">
                                                        <div class="impl_buycar_wrapper">
                                                            <div class="impl_buycar_color" id="color_car">
                                                                <div class="slider slider-for1">
                                                                    <div><img src="{{asset('FrontEnd/assets/Fimg/images/purchase/car1.png')}}" alt="">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-6 col-md-12">
                                                        <div class="impl_buycar_data"
                                                            style="padding-top: 0px;padding-left: 0px;">
                                                       
                                                            <h7>Expedition</h7>
                                                            <h1>Expedition , Centaur </h1>
                                                            <div class="car_emi_wrapper">
                                                                <div class="row">
                                                                    <div class="col-md-3">
                                                                        <p style="margin-top: 0px;margin-bottom: 5px;">
                                                                            Colombo</p>
                                                                        <h6> Mileage:25,000km</h6>
                                                                    </div>
                                                         
                                                                </div>

                                                            </div>
                                                            <div class="impl_old_buy_btn" style="padding-top: 10px;">
                                                                <a href="" class="impl_btn"
                                                                    style="margin-right: 0px;width: 55%;">Price</a>
                                                                <a href="purchase_new_single.html" class="impl_btn"
                                                                    style="margin-right: 0px;margin-left: 10px;">View Details</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-12 col-md-12" style="margin-bottom: 10px;">
                                        <div class="impl_buy_wrapper"
                                            style="background-color:rgb(52, 48, 48); padding-top: 15px;padding-bottom: 15px;">
                                            <div class="container">
                                                <div class="row">
                                                    <div class="col-lg-6 col-md-12">
                                                        <div class="impl_buycar_wrapper">
                                                            <div class="impl_buycar_color" id="color_car">
                                                                <div class="slider slider-for1">
                                                                    <div><img src="{{asset('FrontEnd/assets/Fimg/images/purchase/car1.png')}}" alt="">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-6 col-md-12">
                                                        <div class="impl_buycar_data"
                                                            style="padding-top: 0px;padding-left: 0px;">
                                                       
                                                            <h7>Expedition</h7>
                                                            <h1>Expedition , Centaur </h1>
                                                            <div class="car_emi_wrapper">
                                                                <div class="row">
                                                                    <div class="col-md-3">
                                                                        <p style="margin-top: 0px;margin-bottom: 5px;">
                                                                            Colombo</p>
                                                                        <h6> Mileage:25,000km</h6>
                                                                    </div>
                                                         
                                                                </div>

                                                            </div>
                                                            <div class="impl_old_buy_btn" style="padding-top: 10px;">
                                                                <a href="" class="impl_btn"
                                                                    style="margin-right: 0px;width: 55%;">Price</a>
                                                                <a href="purchase_new_single.html" class="impl_btn"
                                                                    style="margin-right: 0px;margin-left: 10px;">View Details</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                  
                                    <!--pagination start-->
                                    <div class="col-lg-12 col-md-12" style="padding-top: 20px;">
                                        <div class="impl_pagination_wrapper">
                                            <nav aria-label="Page navigation example">
                                                <ul class="pagination">
                                                    <li class="page-item"><a class="page-link" href="#"><i
                                                                class="fa fa-angle-left" aria-hidden="true"></i></a>
                                                    </li>
                                                    <li class="page-item"><a class="page-link" href="#">1</a></li>
                                                    <li class="page-item"><a class="page-link active" href="#">2</a>
                                                    </li>
                                                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                                                    <li class="page-item"><a class="page-link" href="#"><i
                                                                class="fa fa-angle-right" aria-hidden="true"></i></a>
                                                    </li>
                                                </ul>
                                            </nav>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-4">
                                <p style="font-size:30px; font-family:'verdana'" ;><b>Filter</b></p>

                                <div class="custom-select"
                                    style="width:40%; background-color: rgb(52, 48, 48); padding-bottom:14% ;padding-right: 266.5px;margin-top: 10px;">
                                    <select>
                                        <option value="0" selected>District</option>
                                        <option value="1">Colombo</option>
                                        <option value="2">Kandy</option>
                                        <option value="3">Galle</option>
                                        <option value="4">Ampara</option>
                                        <option value="5">Anuradhapura</option>
                                        <option value="6">Badulla</option>
                                        <option value="7">Batticaloa</option>
                                        <option value="8">Gampaha</option>
                                        <option value="9">Hambantota</option>
                                        <option value="10">Jaffna</option>
                                        <option value="11">Kalutara</option>
                                        <option value="12">Keglla</option>
                                        <option value="13">Kilinochchi</option>
                                        <option value="14">Kurunegala</option>
                                        <option value="15">Mannar</option>
                                        <option value="16">Matale</option>
                                        <option value="17">Matara</option>
                                        <option value="18">Moranagala</option>
                                        <option value="19">Mullativu</option>
                                        <option value="20">Nuwara Eliya</option>
                                        <option value="21">Polonnaruwa</option>
                                        <option value="22">Puttalma</option>
                                        <option value="23">Ratnapura</option>
                                        <option value="24">Trincomalee</option>
                                        <option value="25">Vavuniya</option>
                                    </select>
                                </div>
                                <div class="custom-select"
                                    style="width:200px; background-color: rgb(52, 48, 48); padding-bottom:14% ;padding-right: 266.5px;margin-top: 10px;">
                                    <select>

                                        <option value="0">Make</option>
                                        <option value="1">Makedd ddd</option>

                                    </select>
                                </div>
                                <div class="custom-select"
                                    style="width:200px; background-color: rgb(52, 48, 48); padding-bottom:14%;padding-right: 266.5px;margin-top: 10px;">
                                    <select>

                                        <option value="0">Model</option>


                                    </select>
                                </div>
                                <div class="custom-select"
                                    style="width:200px; background-color: rgb(52, 48, 48); padding-bottom:14%;padding-right: 266.5px;margin-top: 10px;">
                                    <select>

                                        <option value="0">Year</option>
                                        <option value="1"></option>
                                        <option value="2"></option>
                                        <option value="3"></option>

                                    </select>
                                </div>
                                <div class="custom-select"
                                    style="width:200px; background-color: rgb(52, 48, 48); padding-bottom:14%;padding-right: 266.5px;margin-top: 10px;">
                                    <select>

                                        <option value="0">Price</option>
                                        <option value="1"></option>
                                        <option value="2"></option>
                                        <option value="3"></option>

                                    </select>
                                </div>
                                <div class="custom-select"
                                    style="width:200px; background-color: rgb(52, 48, 48); padding-bottom:14%;padding-right: 266.5px;margin-top: 10px;">
                                    <select>

                                        <option value="0">Mileage</option>


                                    </select>
                                </div>
                                <div class="custom-select"
                                    style="width:200px; background-color: rgb(52, 48, 48); padding-bottom: 14%;padding-right: 266.5px;margin-top: 10px;">
                                    <select>

                                        <option value="0">Transmission</option>
                                        <option value="1"></option>
                                        <option value="2"></option>
                                        <option value="3"></option>

                                    </select>
                                </div>
                                <div class="custom-select"
                                    style="width:200px; background-color: rgb(52, 48, 48); padding-bottom: 14%;padding-right: 266.5px;margin-top: 10px;">
                                    <select>

                                        <option value="0">BodyType</option>



                                    </select>
                                </div>
                                <div class="custom-select"
                                    style="width:200px; background-color: rgb(52, 48, 48); padding-bottom:14%;padding-right: 266.5px;margin-top: 10px;">
                                    <select>

                                        <option value="0">Bodycolor</option>


                                    </select>
                                </div>

                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>


    @include('Frontend.Template.footer') 

</body>


</html>