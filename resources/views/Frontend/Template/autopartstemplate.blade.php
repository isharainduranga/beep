<!DOCTYPE html>

<html lang="en">

<head>

       <!-- CSRF Token -->
       <meta name="csrf-token" content="{{ csrf_token() }}"> 

       @include('Frontend.Template.header')

    <style>
        /* Dropdown Button */
        .dropbtn {
            background-color: rgb(52, 48, 48);
            color: white;
            padding: 16px;
            font-size: 16px;
            border: none;
            cursor: pointer;

        }

        /* Dropdown button on hover & focus */
        .dropbtn:hover,
        .dropbtn:focus {
            background-color: rgb(52, 48, 48);
        }

        /* The container <div> - needed to position the dropdown content */
        .dropdown {
            position: relative;
            display: inline-block;
        }

        /* Dropdown Content (Hidden by Default) */
        .dropdown-content {
            display: none;
            position: absolute;
            background-color: #f1f1f1;
            min-width: 250px;
            box-shadow: 0px 8px 16px 0px rgba(0, 0, 0, 0.2);
            z-index: 1;
        }

        /* Links inside the dropdown */
        .dropdown-content a {
            color: black;
            padding: 12px 16px;
            text-decoration: none;
            display: block;
        }

        /* Change color of dropdown links on hover */
        .dropdown-content a:hover {
            background-color: #ddd
        }

        /* Show the dropdown menu (use JS to add this class to the .dropdown-content container when the user clicks on the dropdown button) */
        .show {
            display: block;
        }

        /* media query */
        @media only screen and (min-width:1212px) and (max-width:1600px) {
            .impl_purchase_wrapper {
                margin-top: -5%;
            }

            .img-button {
                padding-left: 2%;
                margin-left: 16%;
                width: 10%;
                height: 10%;

            }

            .img-button1 {
                padding-left: 2%;
                margin-left: 4%;
                width: 10%;
                height: 10%;
            }

            .img-button2 {
                padding-left: 2%;
                margin-left: 4%;
                width: 10%;
                height: 10%;

            }

            .img-button3 {
                padding-left: 2%;
                margin-left: 4%;
                width: 10%;
                height: 10%;
            }

            .img-button4 {
                padding-left: 2%;
                margin-left: 4%;
                width: 10%;
                height: 10%;
            }


            .imgtext-1 {
                margin-left: -4%;
            }

            .imgtext-2 {
                margin-left: 6%;
            }

            .imgtext-3 {
                margin-left: 8%;
            }

            .imgtext-4 {
                margin-left: 9%;
            }

            .imgtext-5 {
                margin-left: 8%;
            }

            .dropbtn {
                min-width: 250px;
            }
          
        }

        /* media query for galaxy s9 android 7.0  */
        @media only screen and (min-width:300px) and (max-width: 380px) {
            .topic {
                display: none;
            }

            .impl_purchase_wrapper {
                margin-top: -30%;
            }

            .img-button {
                padding-left: 2%;
                margin-left: 8%;
                width: 10%;
                height: 10%;

            }

            .img-button1 {
                padding-left: 2%;
                margin-left: 11%;
                width: 10%;
                height: 10%;
            }

            .img-button2 {
                padding-left: 2%;
                margin-left: 7%;
                width: 10%;
                height: 10%;

            }

            .img-button3 {
                padding-left: 2%;
                margin-left: 8%;
                width: 10%;
                height: 10%;
            }

            .img-button4 {
                padding-left: 2%;
                margin-left: 9%;
                width: 10%;
                height: 10%;
            }

            .imgtext-1 {
                font-size: 7px;
                margin-left: -20%;
            }

            .imgtext-2 {
                font-size: 7px;
                margin-left: 6%;
            }

            .imgtext-3 {
                font-size: 7px;
                margin-left: 8%;
            }

            .imgtext-4 {
                font-size: 7px;

                margin-left: 9%;
            }

            .imgtext-5 {
                font-size: 7px;
                margin-left: 8%;
            }

            .dropbtn {
                width: 275%;
            }

            .impl_fea_car_img {
                margin-top: 5%;
            }
        }

         /* media query for plus */
         @media only screen and (min-width:380px) and (max-width: 420px) {
            .topic {
                display: none;
            }

            .impl_purchase_wrapper {
                margin-top: -25%;
            }

            .img-button {
                padding-left: 2%;
                margin-left: 8%;
                width: 10%;
                height: 10%;

            }

            .img-button1 {
                padding-left: 2%;
                margin-left: 12%;
                width: 10%;
                height: 10%;
            }

            .img-button2 {
                padding-left: 2%;
                margin-left: 7%;
                width: 10%;
                height: 10%;

            }

            .img-button3 {
                padding-left: 2%;
                margin-left: 8%;
                width: 10%;
                height: 10%;
            }

            .img-button4 {
                padding-left: 2%;
                margin-left: 9%;
                width: 10%;
                height: 10%;
            }

            .imgtext-1 {
                font-size: 9px;
                margin-left: -20%;
            }

            .imgtext-2 {
                font-size: 9px;
                margin-left: 6%;
            }

            .imgtext-3 {
                font-size: 9px;
                margin-left: 5%;
            }

            .imgtext-4 {
                font-size: 9px;
                margin-left: 7%;
            }

            .imgtext-5 {
                font-size: 9px;
                margin-left: 5%;
            }

            .dropbtn {
                width: 320%;
            }

           
        }

        /* media query for ipad */
        @media only screen and (max-width:900px) and (min-width: 420px) {
            .topic {
                display: none;
            }

            .impl_purchase_wrapper {
                margin-top: -10%;
            }

            .img-button {
                padding-left: 2%;
                margin-left: 8%;
                width: 10%;
                height: 10%;

            }

            .img-button1 {
                padding-left: 2%;
                margin-left: 11%;
                width: 10%;
                height: 10%;
            }

            .img-button2 {
                padding-left: 2%;
                margin-left: 7%;
                width: 10%;
                height: 10%;

            }

            .img-button3 {
                padding-left: 2%;
                margin-left: 8%;
                width: 10%;
                height: 10%;
            }

            .img-button4 {
                padding-left: 2%;
                margin-left: 7%;
                width: 10%;
                height: 10%;
            }

            .imgtext-1 {
                font-size: 12px;
                margin-left: -15%;
            }

            .imgtext-2 {
                font-size: 12px;
                margin-left: 8%;
            }

            .imgtext-3 {
                font-size: 12px;
                margin-left: 10%;
            }

            .imgtext-4 {
                font-size: 12px;
                margin-left: 11%;
            }

            .imgtext-5 {
                font-size: 12px;
                margin-left: 8%;
            }

            .dropbtn {
                width: 200%;
            }

            .impl_fea_car_img {
                margin-top: 5%;
            }

        }
    </style>
</head>

<body>
   
    <!------ Breadcrumbs Start ------>
    <div class="impl_bread_wrapper">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12">
                    <h1>purchase</h1>
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">purchase autoparts</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
    <div class="container">

        <div class="row" style=" padding-top: 3%;">
            <div class="col-lg-12 col-md-12">
                <div class="impl_heading">
                    <h1 class="topic">Beep autoparts</h1></br>
                    <div class="row">
                        <img class="img-button" src="{{asset('FrontEnd/assets/Fimg/images/vehicleparts.png')}}" />
                        <img class="img-button1" src="{{asset('FrontEnd/assets/Fimg/images/bikeparts.png')}}" />
                        <img class="img-button2" src="{{asset('FrontEnd/assets/Fimg/images/parts.png')}}" />
                        <img class="img-button3" src="{{asset('FrontEnd/assets/Fimg/images/machineryparts.png')}}" />
                        <img class="img-button4" src="{{asset('FrontEnd/assets/Fimg/images/tools.png')}}" />

                    </div>
                    <div class="row" style="padding-left: 5%; margin-left: 13.5%; padding-top: 1%;">
                        <a class="imgtext-1">Motor Vehicle Parts</a>
                        <a class="imgtext-2">Motorbike Parts</a>
                        <a class="imgtext-3">Tuk Parts</a>
                        <a class="imgtext-4">Machinery Parts</a>
                        <a class="imgtext-5">Other Parts</a>

                    </div>
                </div>
            </div>
        </div>
    </div>
    <!------ Purchase new section Start ------>
    <div class="impl_purchase_wrapper">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-6">
                    <div class="impl_sorting_text custom_select">
                        <span class="impl_show"> Showing 9 of 68 Results</span>
                        <div class="impl_select_wrapper">
                            <span>sort by</span>
                            <select>
                                <option value="1">Newest</option>
                                <option value="2">New</option>
                                <option value="3">Old</option>
                                <option value="4">Oldest</option>
                            </select>
                        </div>
                    </div>
                </div>

                <div class="col-lg-12 col-md-12">
                    <div class="impl_purchase_inner">
                        <div class="row">
                            <div class="col-lg-3 col-md-4">
                                <div class="impl_sidebar">
                                    <div class="impl_product_search widget woocommerce">
                                        <div class="impl_footer_subs">
                                            <input type="text" class="form-control" placeholder="Search...">
                                            <button class="foo_subs_btn"><i class="fa fa-search"
                                                    aria-hidden="true"></i></button>
                                        </div>
                                    </div>
                                    <!--Brands-->
                                    <div class="impl_product_brand widget woocommerce">
                                        <h2 class="widget-title">Parts</h2>
                                        <ul>
                                            <li>
                                                <label class="brnds_check_label">
                                                    Mechanical Parts
                                                    <input type="checkbox" name="check">
                                                    <span class="label-text"></span>
                                                </label></br>
                                            </li>


                                            <li>
                                                <label class="brnds_check_label">
                                                    Exterior Parts
                                                    <input type="checkbox" name="check">
                                                    <span class="label-text"></span>
                                                </label>
                                            </li>

                                            <li>
                                                <label class="brnds_check_label">
                                                    Interior Parts
                                                    <input type="checkbox" name="check">
                                                    <span class="label-text"></span>
                                                </label>
                                            </li>

                                            <li>
                                                <label class="brnds_check_label">
                                                    Electrical Parts
                                                    <input type="checkbox" name="check">
                                                    <span class="label-text"></span>
                                                </label>
                                            </li>

                                            <li>
                                                <label class="brnds_check_label">
                                                    Oil & Filters
                                                    <input type="checkbox" name="check">
                                                    <span class="label-text"></span>
                                                </label>
                                            </li>

                                            <li>
                                                <label class="brnds_check_label">
                                                    Batteries
                                                    <input type="checkbox" name="check">
                                                    <span class="label-text"></span>
                                                </label>
                                            </li>

                                            <li>
                                                <label class="brnds_check_label">
                                                    Alloy Wheel & Tires
                                                    <input type="checkbox" name="check">
                                                    <span class="label-text"></span>
                                                </label>
                                            </li>

                                            <li>
                                                <label class="brnds_check_label">
                                                    Other parts
                                                    <input type="checkbox" name="check">
                                                    <span class="label-text"></span>
                                                </label>
                                            </li>



                                        </ul>

                                    </div>
                                    <div class="dropdown">
                                        <button onclick="myFunction()" class="dropbtn">Price Range</button>
                                        <div id="myDropdown" class="dropdown-content">
                                            <a href="#">Rs.1000-Rs.25000</a>
                                            <a href="#">Rs.25000-Rs.50000</a>
                                            <a href="#">Rs.50000-Rs.75000</a>
                                            <a href="#">Rs.75000-Rs.100000</a>
                                        </div>
                                    </div>

                                </div>
                            </div>
                            <div class="col-lg-9 col-md-8">
                                <div class="row">
                                    <div class="col-lg-4 col-md-6">
                                        <div class="impl_fea_car_box">
                                            <div class="impl_fea_car_img">
                                                <img src="{{asset('FrontEnd/assets/Fimg/images/vehicle_parts/headlight.jpg')}}" alt=""
                                                    class="firstimg" />

                                            </div>
                                            <div class="impl_fea_car_data">
                                                <h2><a href="purchase_new_single.html">Aurora</a></h2>
                                                <ul>
                                                    <li><span class="impl_fea_title">model</span>
                                                        <span class="impl_fea_name">Aurora 811</span>
                                                    </li>
                                                    <li><span class="impl_fea_title">Vehicle Status</span>
                                                        <span class="impl_fea_name">new</span>
                                                    </li>
                                                    <li><span class="impl_fea_title">Color</span>
                                                        <span class="impl_fea_name">white</span>
                                                    </li>
                                                </ul>
                                                <div class="impl_fea_btn">
                                                    <button class="impl_btn"><span class="impl_doller">$ 72000
                                                        </span><span class="impl_bnw">buy now</span></button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!--2-->
                                    <div class="col-lg-4 col-md-6">
                                        <div class="impl_fea_car_box">
                                            <div class="impl_fea_car_img">
                                                <div class="impl_fea_car_img">
                                                    <img src="{{asset('FrontEnd/assets/Fimg/images/vehicle_parts/headlight.jpg')}}" alt=""
                                                        class="firstimg" />
    
                                                </div>

                                            </div>
                                            <div class="impl_fea_car_data">
                                                <h2><a href="purchase_new_single.html">Serpent</a></h2>
                                                <ul>
                                                    <li><span class="impl_fea_title">model</span>
                                                        <span class="impl_fea_name">Serpent EB </span>
                                                    </li>
                                                    <li><span class="impl_fea_title">Vehicle Status</span>
                                                        <span class="impl_fea_name">new</span>
                                                    </li>
                                                    <li><span class="impl_fea_title">Color</span>
                                                        <span class="impl_fea_name">blue</span>
                                                    </li>
                                                </ul>
                                                <div class="impl_fea_btn">
                                                    <button class="impl_btn"><span class="impl_doller">$ 72000
                                                        </span><span class="impl_bnw">buy now</span></button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!--3-->
                                    <div class="col-lg-4 col-md-6">
                                        <div class="impl_fea_car_box">
                                            <div class="impl_fea_car_img">
                                                <div class="impl_fea_car_img">
                                                    <img src="{{asset('FrontEnd/assets/Fimg/images/vehicle_parts/headlight.jpg')}}" alt=""
                                                        class="firstimg" />
    
                                                </div>

                                            </div>
                                            <div class="impl_fea_car_data">
                                                <h2><a href="purchase_new_single.html">Basilisk</a></h2>
                                                <ul>
                                                    <li><span class="impl_fea_title">model</span>
                                                        <span class="impl_fea_name">Basilisk 811</span>
                                                    </li>
                                                    <li><span class="impl_fea_title">Vehicle Status</span>
                                                        <span class="impl_fea_name">new</span>
                                                    </li>
                                                    <li><span class="impl_fea_title">Color</span>
                                                        <span class="impl_fea_name">white</span>
                                                    </li>
                                                </ul>
                                                <div class="impl_fea_btn">
                                                    <button class="impl_btn"><span class="impl_doller">$ 72000
                                                        </span><span class="impl_bnw">buy now</span></button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!--4-->
                                    <div class="col-lg-4 col-md-6">
                                        <div class="impl_fea_car_box">
                                            <div class="impl_fea_car_img">
                                                <div class="impl_fea_car_img">
                                                    <img src="{{asset('FrontEnd/assets/Fimg/images/vehicle_parts/headlight.jpg')}}" alt=""
                                                        class="firstimg" />
    
                                                </div>
                                            </div>
                                            <div class="impl_fea_car_data">
                                                <h2><a href="purchase_new_single.html">Mirage</a></h2>
                                                <ul>
                                                    <li><span class="impl_fea_title">model</span>
                                                        <span class="impl_fea_name">Mirage</span>
                                                    </li>
                                                    <li><span class="impl_fea_title">Vehicle Status</span>
                                                        <span class="impl_fea_name">new</span>
                                                    </li>
                                                    <li><span class="impl_fea_title">Color</span>
                                                        <span class="impl_fea_name">white</span>
                                                    </li>
                                                </ul>
                                                <div class="impl_fea_btn">
                                                    <button class="impl_btn"><span class="impl_doller">$ 72000
                                                        </span><span class="impl_bnw">buy now</span></button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!--5-->
                                    <div class="col-lg-4 col-md-6">
                                        <div class="impl_fea_car_box">
                                            <div class="impl_fea_car_img">
                                                <img src="{{asset('FrontEnd/assets/Fimg/images/vehicle_parts/headlight.jpg')}}" alt=""
                                                    class="firstimg" />

                                            </div>
                                            <div class="impl_fea_car_data">
                                                <h2><a href="purchase_new_single.html"> Realm</a></h2>
                                                <ul>
                                                    <li><span class="impl_fea_title">model</span>
                                                        <span class="impl_fea_name"> Realm</span>
                                                    </li>
                                                    <li><span class="impl_fea_title">Vehicle Status</span>
                                                        <span class="impl_fea_name">new</span>
                                                    </li>
                                                    <li><span class="impl_fea_title">Color</span>
                                                        <span class="impl_fea_name">black</span>
                                                    </li>
                                                </ul>
                                                <div class="impl_fea_btn">
                                                    <button class="impl_btn"><span class="impl_doller">$ 72000
                                                        </span><span class="impl_bnw">buy now</span></button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!--6-->
                                    <div class="col-lg-4 col-md-6">
                                        <div class="impl_fea_car_box">
                                            <div class="impl_fea_car_img">
                                                <img src="{{asset('FrontEnd/assets/Fimg/images/vehicle_parts/headlight.jpg')}}" alt=""
                                                    class="firstimg" />

                                            </div>
                                            <div class="impl_fea_car_data">
                                                <h2><a href="purchase_new_single.html"> Empire</a></h2>
                                                <ul>
                                                    <li><span class="impl_fea_title">model</span>
                                                        <span class="impl_fea_name">Empire</span>
                                                    </li>
                                                    <li><span class="impl_fea_title">Vehicle Status</span>
                                                        <span class="impl_fea_name">new</span>
                                                    </li>
                                                    <li><span class="impl_fea_title">Color</span>
                                                        <span class="impl_fea_name">yellow</span>
                                                    </li>
                                                </ul>
                                                <div class="impl_fea_btn">
                                                    <button class="impl_btn"><span class="impl_doller">$ 72000
                                                        </span><span class="impl_bnw">buy now</span></button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                
                                    <!--pagination start-->
                                    <div class="col-lg-12 col-md-12">
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
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    @include('Frontend.Template.footerdownload') 
    @include('Frontend.Template.footer')
</body>


<!-- Mirrored from kamleshyadav.com/html/impel/template/purchase_new.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 13 Dec 2020 16:55:01 GMT -->

</html>