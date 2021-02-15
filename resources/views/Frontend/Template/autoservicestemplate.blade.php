<!DOCTYPE html>

<html lang="en">

<head>

   <!-- CSRF Token -->
   <meta name="csrf-token" content="{{ csrf_token() }}"> 

   @include('Frontend.Template.header')

    <style>
        .custom-select {
            position: relative;
            font-family: Arial;
            border-bottom-width: 0px;
            border-top-width: 0px;
            padding-top: 0px;
            padding-bottom: 0px;
            border-left-width: 0px;
            border-right-width: 0px;
            padding-left: 0px;
            padding-right: 0px;
            background-color: red;
        }

        .custom-select select {
            display: none;
            /*hide original SELECT element:*/
        }

        .select-selected {
            background-color: red;
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
            background-color: red;
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

            .custom-select {
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
                        <li class="breadcrumb-item active">Autoservices</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
    <div class="container">

        <div class="row" style=" padding-top: 3%;">
            <div class="col-lg-12 col-md-12">
                <div class="impl_heading">
                    <h1 class="topic">Beep autoservices</h1></br>
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
                                        <h2 class="widget-title">Services</h2>
                                        <ul>
                                            <li>
                                                <label class="brnds_check_label">
                                                    Financial Services
                                                    <input type="checkbox" name="check">
                                                    <span class="label-text"></span>
                                                </label></br>
                                            </li>


                                            <li>
                                                <label class="brnds_check_label">
                                                    Auto Servicing and Repairing Services
                                                    <input type="checkbox" name="check">
                                                    <span class="label-text"></span>
                                                </label>
                                            </li>

                                            <li>
                                                <label class="brnds_check_label">
                                                    Accident Repairing Service

                                                    <input type="checkbox" name="check">
                                                    <span class="label-text"></span>
                                                </label>
                                            </li>

                                            <li>
                                                <label class="brnds_check_label">
                                                    Vehicle Modification Services

                                                    <input type="checkbox" name="check">
                                                    <span class="label-text"></span>
                                                </label>
                                            </li>

                                            <li>
                                                <label class="brnds_check_label">
                                                    Breakdown Services
                                                    <input type="checkbox" name="check">
                                                    <span class="label-text"></span>
                                                </label>
                                            </li>

                                            <li>
                                                <label class="brnds_check_label">
                                                    Valuation and Fitness Report Services
                                                    <input type="checkbox" name="check">
                                                    <span class="label-text"></span>
                                                </label>
                                            </li>

                                            <li>
                                                <label class="brnds_check_label">
                                                    Brokering Services
                                                    <input type="checkbox" name="check">
                                                    <span class="label-text"></span>
                                                </label>
                                            </li>

                                            <li>
                                                <label class="brnds_check_label">
                                                    Advising Services
                                                    <input type="checkbox" name="check">
                                                    <span class="label-text"></span>
                                                </label>
                                            </li>
                                            <li>
                                                <label class="brnds_check_label">
                                                    Other Services
                                                    <input type="checkbox" name="check">
                                                    <span class="label-text"></span>
                                                </label>
                                            </li>



                                        </ul>

                                    </div>

                                    <div class="custom-select">
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


                                </div>
                            </div>
                            <div class="col-lg-9 col-md-8">
                                <div class="row">
                                    <div class="col-lg-4 col-md-6">
                                        <div class="impl_fea_car_box">
                                            <div class="impl_fea_car_img">
                                                <img src="{{asset('FrontEnd/assets/Fimg/images/vehicle_parts/headlight.jpg')}}" alt="" class="firstimg" />

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
                                                    <img src="{{asset('FrontEnd/assets/Fimg/images/vehicle_parts/headlight.jpg')}}"alt=""
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
                                                <img src="{{asset('FrontEnd/assets/Fimg/images/vehicle_parts/headlight.jpg')}}" alt="" class="firstimg" />

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
                                                <img src="{{asset('FrontEnd/assets/Fimg/images/vehicle_parts/headlight.jpg')}}" alt="" class="firstimg" />

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



</html>