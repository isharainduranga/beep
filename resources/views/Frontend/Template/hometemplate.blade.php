<!DOCTYPE html>
<html lang="en">

<head>
       <!-- CSRF Token -->
       <meta name="csrf-token" content="{{ csrf_token() }}"> 


       @include('Frontend.Template.header')


    <style>
   

    /* ---------------bottomright div start------------------------ */
    .container {
        position: relative;
    }

    .bottomright {
        position: absolute;
        bottom: 75%;
        right: 8%;
        font-size: 150%;
    }

    /* ---------------bottomright div end------------------------ */
    .row1 {
        position: absolute;
        bottom: 0%;
        right: 40%;

    }

    .column {
        float: right;
        width: 30%;
        padding: 10px;
        height: 300px;
    }

    /* -------------------overlay on image start---------------- */
    .centered {
        position: relative;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);

    }

    /* -------------------overlay on image start---------------- */
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

    .corner {
        position: absolute;
        bottom: 0;
        right: 0;


    }

    /* ----------------slide pannel end-------------- */

    /* media query for pc */
    @media only screen and (min-width:1212px) and (max-width:1600px) {
        .impl_menu_wrapper {
            width: 100%;
        }

        .topic-logo {
            margin-top: -75%;
        }

        .corner {

            margin-right: 15%;
            margin-bottom: -50%;
        }

        .openbtn {
            display: none;
        }

        .heading_area {
            margin-top: -60%;

        }

        .img-row {
            margin-top: 5%;
        }

        .img-row2 {
            margin-top: 5%;
        }

        .img-item-button1 {
            padding-left: 2%;
            margin-left: -3%;
            width: 10%;
            height: 10%;


        }

        .img-item-button2 {
            padding-left: 2%;
            margin-left: 0%;
            width: 10%;
            height: 10%;
        }

        .img-item-button3 {
            padding-left: 2%;
            margin-left: 30%;
            width: 10%;
            height: 10%;
        }

        .img-item-button4 {
            padding-left: 2%;
            margin-left: 66%;
            width: 100%;
            height: 100%;
        }

        .img-item-button5 {
            padding-left: 2%;
            margin-left: 10%;
            width: 10%;
            height: 10%;
        }

        .img-item-button {
            padding-left: 2%;
            margin-left: 4%;
            width: 10%;
            height: 10%;
        }

        /* top img text */
        .img-text1 {
            margin-left: -1%;

        }

        .img-text {
            margin-left: 15%;

        }

        .img-text2 {
            margin-left: 14%;

        }

        .img-text3 {
            margin-left: 13%;

        }

        .img-text4 {
            margin-left: 15%;

        }

        .img-text5 {
            margin-left: 11%;

        }

        .img-text6 {
            margin-left: 10%;

        }


        .img-text-set2 {
            font-size: 12px;
            margin-left: 2%;
        }

        .img-text-set3 {
            font-size: 12px;
            margin-left: 12%;
        }

        .img-text-set7 {
            font-size: 12px;
            margin-left: 11%;
        }

        .img-text-set8 {
            font-size: 12px;
            margin-left: 12%;
        }

        .img-text-set4 {
            font-size: 12px;
            margin-left: 12%;
        }

        .img-text-set5 {
            font-size: 11px;
            margin-left: 12%;
        }

        .img-text-set6 {
            font-size: 12px;
            margin-left: 11%;
        }

        .bottomtext {
            margin-left: -90%;
        }

        .download {
            font-size: 30px;
            margin-left: 40%;
        }

        .appstore {
            width: 20%;
            height: 10%;
            margin-left: 30%;
            padding-bottom: 0px;

            margin-top: -1%;
        }

        .playstore {
            width: 20%;
            height: 30%;
            margin-left: 0%;
            padding-top: 0%;
            margin-top: -7.6%;
        }


    }

    /* media query for galaxy s9 android 7.0  */
    @media only screen and (min-width:300px) and (max-width: 380px) {
        .impl_menu_wrapper {
            display: none;
        }

        .middle {
            margin-top: -10%;
        }

        .img-row3 {
            margin-top: -5%;
        }

        .openbtn {
            display: inline-block;
        }

        .heading_area h1 {

            display: inline-block;
        }

        .topic-logo {
            display: none;
        }

        .btnred {
            display: inline-block;
        }

        .heading_area {
            margin-top: -60%;

        }

        .img-text1 {
            font-size: 8px;
            display: inline-block;
            margin-left: -8%;
        }

        .img-text {
            margin-left: 18%;
            font-size: 8px;
            display: inline-block;
        }

        .img-text2 {
            margin-left: 15%;
            font-size: 8px;
            display: inline-block;
        }

        .img-text3 {
            margin-left: 14%;
            font-size: 8px;
            display: inline-block;
        }

        .img-text4 {
            margin-left: 17%;
            font-size: 8px;
            display: inline-block;
        }

        .img-text5 {
            margin-left: 10%;
            font-size: 8px;
            display: inline-block;
        }

        .img-text6 {
            margin-left: 10%;
            font-size: 8px;
            display: inline-block;
        }

        .img-text-set2 {
            font-size: 6px;
            margin-left: -10%;
        }

        .img-text-set3 {
            font-size: 6px;
            margin-left: 12%;
        }

        .img-text-set4 {
            font-size: 6px;
            margin-left: 13%;
        }

        .img-text-set5 {
            font-size: 6px;
            margin-left: 12%;
        }

        .img-text-set6 {
            font-size: 6px;
            margin-left: 13%;
        }


        .img-item-button {
            padding-left: 3%;
            margin-left: 6%;
            width: 12%;
            height: 12%;
        }

        .img-item-button1 {
            padding-left: 2%;
            margin-left: 6%;
            width: 12%;
            height: 12%;
        }

        .img-item-button2 {
            padding-left: 2%;
            margin-left: 0%;
            width: 11%;
            height: 11%;
        }

        .img-item-button3 {

            padding-left: 2%;
            margin-left: 22%;
            width: 12%;
            height: 12%;


        }

        .img-item-button4 {
            padding-left: 2%;
            margin-left: 20%;
            width: 40%;
            height: 100%;
        }

        .img-item-button5 {
            padding-left: 2%;
            margin-left: 5%;
            width: 12%;
            height: 12%;
        }

        /* bottom btn text  */
        .img-text-set7 {
            font-size: 8px;
            margin-left: 9%;
        }

        .img-text-set8 {
            font-size: 8px;
            margin-left: -1%;
        }

        .top {
            display: none;
        }

        .menu_cross {
            display: none;
        }

        .impl_menu {
            display: inline;
        }

        .impl_help_wrapper {
            display: none;
        }

        .bottom {
            margin-top: -28%;
        }

        .download {
            font-size: 20px;
            margin-left: 25%;
            margin-top: -10%;
        }

        .appstore {
            width: 20%;
            height: 10%;
            margin-left: 30%;
            padding-bottom: 0px;

            margin-top: -1%;
        }

        .playstore {
            width: 20%;
            height: 30%;
            margin-left: 0%;
            padding-top: 0%;
            margin-top: -7.6%;
        }

    }

    /* media query for plus */
    @media only screen and (min-width:380px) and (max-width: 420px) {
        .impl_menu_wrapper {
            display: none;
        }

        .middle {
            margin-top: -10%;
        }

        .openbtn {
            display: inline-block;
        }


        .heading_area h1 {

            display: inline-block;
        }

        .topic-logo {
            display: none;
        }

        .img-text1 {
            font-size: 8px;
            display: inline-block;
            margin-left: -7%;
        }

        .img-text {
            font-size: 8px;
            display: inline-block;
            margin-left: 19%;

        }

        .img-text2 {
            font-size: 8px;
            display: inline-block;
            margin-left: 15%;
        }

        .img-text3 {
            font-size: 8px;
            display: inline-block;
            margin-left: 16%;
        }

        .img-text4 {
            font-size: 8px;
            display: inline-block;
            margin-left: 17%;
        }

        .img-text5 {
            font-size: 8px;
            display: inline-block;
            margin-left: 11%;
        }

        .img-text6 {
            font-size: 8px;
            display: inline-block;
            margin-left: 12%;
        }

        .heading_area {
            margin-top: -55%;
        }

        .img-text-set2 {
            font-size: 8px;
            margin-left: -11%;
        }

        .img-text-set3 {
            font-size: 8px;
            margin-left: 10%;
        }

        .img-text-set4 {
            font-size: 8px;
            margin-left: 13%;
        }

        .img-text-set5 {
            font-size: 8px;
            margin-left: 10%;
        }

        .img-text-set6 {
            font-size: 8px;
            margin-left: 10%;
        }

        .img-item-button {
            padding-left: 3%;
            margin-left: 6%;
            width: 12%;
            height: 12%;
        }

        .img-item-button1 {
            padding-left: 2%;
            margin-left: 6%;
            width: 12%;
            height: 12%;
        }

        .img-item-button2 {
            padding-left: 2%;
            margin-left: 0%;
            width: 11%;
            height: 11%;
        }

        .img-item-button3 {

            padding-left: 2%;
            margin-left: 22%;
            width: 12%;
            height: 12%;
        }



        .img-item-button4 {
            padding-left: 2%;
            margin-left: 24%;
            width: 50%;
            height: 90%;
        }

        .img-item-button5 {
            padding-left: 2%;
            margin-left: 5%;
            width: 12%;
            height: 12%;
        }

        /* bottom btn text  */
        .img-text-set7 {
            font-size: 8px;
            margin-left: 12%;
        }

        .img-text-set8 {
            font-size: 8px;
            margin-left: -1%;
        }


        .dropdown {
            display: none;
        }

        .top {
            display: none;
        }

        .btnred {
            display: none;
        }

        .menu_cross {
            display: none;
        }

        .bottom {
            margin-top: -28%;
        }

        .impl_help_wrapper {
            display: none;
        }

        .download {
            font-size: 20px;
            margin-left: 25%;
            margin-top: -10%;
        }

        .appstore {
            width: 20%;
            height: 10%;
            margin-left: 30%;
            padding-bottom: 0px;

            margin-top: -1%;
        }

        .playstore {
            width: 20%;
            height: 30%;
            margin-left: 0%;
            padding-top: 0%;
            margin-top: -7.6%;
        }

    }

    /* media query for nexus7 */
    @media only screen and (min-width:420px)and (max-width: 620px) {
        .impl_menu_wrapper {
            display: none;
        }

        .openbtn {
            display: inline-block;
        }

        .heading_area {
            margin-top: -65%;

        }

        .heading_area h1 {

            display: inline-block;
        }

        .topic-logo {
            display: none;
        }

        .img-row2 {
            margin-top: 3%;
        }

        .middle {
            margin-top: -8%;
        }

        .img-row3 {
            margin-top: -2%;
        }

        .img-text1 {
            font-size: 10px;
            display: inline-block;
            margin-left: -6%;
        }

        .img-text {
            font-size: 10px;
            display: inline-block;
            margin-left: 18%;
        }

        .img-text2 {
            font-size: 10px;
            display: inline-block;
            margin-left: 16%;
        }

        .img-text3 {
            font-size: 10px;
            display: inline-block;
            margin-left: 16%;
        }

        .img-text4 {
            font-size: 10px;
            display: inline-block;
            margin-left: 18%;
        }

        .img-text5 {
            font-size: 10px;
            display: inline-block;
            margin-left: 13%;
        }

        .img-text6 {
            font-size: 10px;
            display: inline-block;
            margin-left: 11%;
        }



        .img-text-set2 {
            font-size: 10px;
            margin-left: -1%;
        }

        .img-text-set3 {
            font-size: 10px;
            margin-left: 8%;
        }

        .img-text-set4 {
            font-size: 10px;
            margin-left: 8%;
        }

        .img-text-set5 {
            font-size: 10px;
            margin-left: 6%;
        }

        .img-text-set6 {
            font-size: 10px;
            margin-left: 5%;
        }

        .img-item-button {
            padding-left: 3%;
            margin-left: 6%;
            width: 12%;
            height: 12%;
        }

        .img-item-button1 {
            padding-left: 2%;
            margin-left: 6%;
            width: 12%;
            height: 12%;
        }

        .img-item-button2 {
            padding-left: 2%;
            margin-left: 4%;
            width: 11%;
            height: 11%;
        }

        .img-item-button3 {

            padding-left: 2%;
            margin-left: 22%;
            width: 12%;
            height: 12%;
        }

        .img-item-button4 {
            padding-left: 2%;
            margin-left: 40%;
            width: 60%;
            height: 100%;
        }

        .img-item-button5 {
            padding-left: 2%;
            margin-left: 7%;
            width: 12%;
            height: 12%;
        }

        .img-text-set2 {
            margin-left: -8%;
        }

        .img-text-set3 {
            margin-left: 12%;
        }

        .img-text-set4 {
            margin-left: 12%;
        }

        .img-text-set5 {
            margin-left: 12%;
        }

        .img-text-set6 {
            margin-left: 9%;
        }

        /* bottom btn text  */
        .img-text-set7 {
            font-size: 8px;
            margin-left: 14%;
        }

        .img-text-set8 {
            font-size: 8px;
            margin-left: -1%;
        }



        .dropdown {
            display: none;
        }

        .top {
            display: none;
        }

        .btnred {
            display: none;
        }

        .menu_cross {
            display: none;
        }

        .impl_help_wrapper {
            display: none;
        }

        .download {
            font-size: 20px;
            margin-left: 25%;
            margin-top: -10%;
        }

        .appstore {
            width: 20%;
            height: 10%;
            margin-left: 30%;
            padding-bottom: 0px;

            margin-top: -1%;
        }

        .playstore {
            width: 20%;
            height: 30%;
            margin-left: 0%;
            padding-top: 0%;
            margin-top: -7.6%;
        }
    }


    /* media query for ipad */
    @media only screen and (min-width:620px) and (max-width: 1000px) {
        .impl_menu_wrapper {
            display: none;
        }

        .topic-logo {
            margin-top: 25%;
        }

        .impl_heading {
            margin-top: -5%;
        }

        .heading_area {
            margin-top: -60%;
        }

        .openbtn {
            display: inline-block;
        }



        .btnred {
            display: none;
        }

        .img-item-button {
            padding-left: 3%;
            margin-left: 6%;
            width: 12%;
            height: 12%;
        }

        .img-item-button1 {
            padding-left: 2%;
            margin-left: 6%;
            width: 12%;
            height: 12%;
        }

        .img-item-button2 {
            padding-left: 2%;
            margin-left: 4%;
            width: 11%;
            height: 11%;
        }

        .img-item-button3 {
            padding-left: 2%;
            margin-left: 24%;
            width: 12%;
            height: 12%;
        }

        /* top img text */
        .img-text1 {
            margin-left: -6%;
        }

        .img-text {
            margin-left: 18%;

        }

        .img-text2 {
            margin-left: 16%;
        }

        .img-text3 {
            margin-left: 16%;
        }

        .img-text4 {
            margin-left: 18%;
        }

        .img-text5 {
            margin-left: 13%;
        }

        .img-text6 {
            margin-left: 11%;
        }

        /* middle btn text */
        .img-text-set2 {
            font-size: 12px;
            margin-left: -7%;
        }

        .img-text-set3 {
            font-size: 12px;
            margin-left: 12%;
        }

        .img-text-set4 {
            font-size: 12px;
            margin-left: 15%;
        }

        .img-text-set5 {
            font-size: 12px;
            margin-left: 12%;
        }

        .img-text-set6 {
            font-size: 12px;
            margin-left: 12%;
        }

        /* bottom btn text  */


        .img-text-set7 {
            font-size: 12px;
            margin-left: 13%;
        }

        .img-text-set8 {
            font-size: 12px;
            margin-left: 3%;
        }

        /* bottom btn  */

        .img-item-button3 {
            padding-left: 2%;
            margin-left: 24%;
            width: 12%;
            height: 12%;
        }

        .img-item-button4 {
            padding-left: 2%;
            margin-left: 70%;
            width: 80%;
            height: 100%;
        }

        .img-item-button5 {
            padding-left: 2%;
            margin-left: 15%;
            width: 12%;
            height: 12%;
        }

        .top {
            display: none;
        }

        .menu_cross {
            display: none;
        }

        .impl_help_wrapper {
            display: none;
        }

        .bottom {
            margin-top: -28%;
        }

        .download {
            font-size: 20px;
            margin-left: 40%;
            margin-top: -5%;
        }

        .appstore {
            width: 20%;
            height: 10%;
            margin-left: 30%;
            padding-bottom: 0px;

            margin-top: -1%;
        }

        .playstore {
            width: 20%;
            height: 30%;
            margin-left: 0%;
            padding-top: 0%;
            margin-top: -7.6%;
        }

    }

    /* media query for ipad pro */
    @media only screen and (min-width:1000px)  {
        .impl_menu_wrapper {
            display: none;
        }

        .topic-logo {
            margin-top: 25%;
        }

        .impl_heading {
            margin-top: 2%;
        }

        .heading_area {
            margin-top: -60%;
        }

        .openbtn {
            display: inline-block;
        }



        .btnred {
            display: none;
        }

        .img-item-button {
            padding-left: 3%;
            margin-left: 6%;
            width: 12%;
            height: 12%;
        }

        .img-item-button1 {
            padding-left: 2%;
            margin-left: 6%;
            width: 12%;
            height: 12%;
        }

        .img-item-button2 {
            padding-left: 2%;
            margin-left: 4%;
            width: 11%;
            height: 11%;
        }

        .img-item-button3 {
            padding-left: 2%;
            margin-left: 24%;
            width: 12%;
            height: 12%;
        }

        /* top img text */
        .img-text1 {
            margin-left: -6%;
        }

        .img-text {
            margin-left: 20%;

        }

        .img-text2 {
            margin-left: 18%
        }

        .img-text3 {
            margin-left: 17%;
        }

        .img-text4 {
            margin-left: 19%;
        }

        .img-row2 {
            margin-top: 2%;
        }

        .img-text5 {
            margin-left: 13%;
        }

        .img-text6 {
            margin-left: 11%;
        }

        /* middle btn text */
        .img-text-set2 {
            font-size: 12px;
            margin-left: -6%;
        }

        .img-text-set3 {
            font-size: 12px;
            margin-left: 15%;
        }

        .img-text-set4 {
            font-size: 12px;
            margin-left: 16%;
        }

        .img-text-set5 {
            font-size: 12px;
            margin-left: 15%;
        }

        .img-text-set6 {
            font-size: 12px;
            margin-left: 14%;
        }

        /* bottom btn text  */


        .img-text-set7 {
            font-size: 12px;
            margin-left: 13%;
        }

        .img-text-set8 {
            font-size: 12px;
            margin-left: 5%;
        }

        /* bottom btn  */

        .img-item-button3 {
            padding-left: 2%;
            margin-left: 24%;
            width: 12%;
            height: 12%;
        }

        .img-item-button4 {
            padding-left: 2%;
            margin-left: 70%;
            width: 100%;
            height: 100%;
        }

        .img-item-button5 {
            padding-left: 2%;
            margin-left: 12%;
            width: 12%;
            height: 12%;
        }

        .top {
            display: none;
        }

        .menu_cross {
            display: none;
        }

        .impl_help_wrapper {
            display: none;
        }

        .bottom {
            margin-top: -28%;
        }

        .download {
            font-size: 20px;
            margin-left: 40%;
            margin-top: -5%;
        }

        .appstore {
            width: 20%;
            height: 10%;
            margin-left: 30%;
            padding-bottom: 0px;

            margin-top: -1%;
        }

        .playstore {
            width: 20%;
            height: 30%;
            margin-left: 0%;
            padding-top: 0%;
            margin-top: -7.6%;
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

 <!------ Featured Cars Start ------>
    <div>
        <img class="img-background" src="{{asset('FrontEnd/assets/Fimg/images/background.jpg')}}"
            style="  background-repeat: no-repeat; background-size: 100%; opacity: 0.2; ">
        <div class="centered">

            <div class="container">

                <div class="row">
                    <div class="col-lg-12 col-md-12">

                        <div class="heading_area">
                            <h1>
                                <p class="topic-logo" style="text-align: center; font-size: 140px;">
                                    beep</p></br>

                            </h1>
                            <div class="impl_heading">
                                <h1>BEEP OPTIONS
                                </h1></br>
                                <div class="img-row" style="margin-top: 1%;">
                                    <a href="/shop"><img class="img-item-button1"
                                            src="{{asset('FrontEnd/assets/Fimg/images/icon_car.png')}}" /></a>
                                    <img class="img-item-button"
                                        src="{{asset('FrontEnd/assets/Fimg/images/icon_suv.png')}}" />
                                    <img class="img-item-button"
                                        src="{{asset('FrontEnd/assets/Fimg/images/icon_pickup.png')}}" />
                                    <img class="img-item-button"
                                        src="{{asset('FrontEnd/assets/Fimg/images/icon_van.png')}}" />
                                    <img class="img-item-button"
                                        src="{{asset('FrontEnd/assets/Fimg/images/icon_bus.png')}}" />


                                </div>

                                <div class="row" style="padding-left: 5%; margin-left: 15%; padding-top: 1%;">
                                    <a class="img-text1">CAR</a>
                                    <a class="img-text">SUV</a>
                                    <a class="img-text2">PICKUP</a>
                                    <a class="img-text3">VAN</a>
                                    <a class="img-text4">BUS</a>

                                </div>
                                <div class="img-row2">
                                    <img class="img-item-button1"
                                        src="{{asset('FrontEnd/assets/Fimg/images/icon_bike.png')}}" />
                                    <img class="img-item-button"
                                        src="{{asset('FrontEnd/assets/Fimg/images/icon_tuk.png')}}" />
                                    <img class="img-item-button"
                                        src="{{asset('FrontEnd/assets/Fimg/images/icon_lorry.png')}}" />
                                    <img class="img-item-button"
                                        src="{{asset('FrontEnd/assets/Fimg/images/icon_machinery.png')}}" />
                                    <img class="img-item-button"
                                        src="{{asset('FrontEnd/assets/Fimg/images/icon_other.png')}}" />

                                </div>
                                <div class="row" style="padding-left: 5%;margin-left: 15%; padding-top: 1%;">
                                    <a class="img-text1">BIKE</a>
                                    <a class="img-text">TUK</a>
                                    <a class="img-text2">LORRY</a>
                                    <a class="img-text5">MACHINERY</a>
                                    <a class="img-text6">OTHER</a>
                                </div>
                            </div>
                        </div>
                        <div class="impl_heading">
                            <div class="middle">
                                <h1>Find Beep</h1></br>
                                <div class="img-row3">
                                    <a href="rentals.html"><img class="img-item-button2"
                                            src="{{asset('FrontEnd/assets/Fimg/images/rentals.png')}}" /></a>
                                    <a href="/autoservices"><img class="img-item-button"
                                            src="{{asset('FrontEnd/assets/Fimg/images/services.png')}}" /></a>
                                    <a href="/autoparts"><img class="img-item-button"
                                            src="{{asset('FrontEnd/assets/Fimg/images/parts.png')}}" /></a>
                                    <a href="/accessories"><img class="img-item-button"
                                            src="{{asset('FrontEnd/assets/Fimg/images/icon_van.png')}}" /></a>
                                    <a href="purchase_tools.html"> <img class="img-item-button"
                                            src="{{asset('FrontEnd/assets/Fimg/images/tools.png')}}" /></a>

                                </div>
                                <div class="row" style="padding-left: 5%; margin-left: 13.5%; padding-top: 1%;">
                                    <a class="img-text-set2">RENTALS</a>
                                    <a class="img-text-set3">SERVICES</a>
                                    <a class="img-text-set4">PARTS</a>
                                    <a class="img-text-set5">ACCESSORIES</a>
                                    <a class="img-text-set6">TOOLS</a>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="container">
            <div class="row" style="padding-top: 3%;">

                <div class="col-lg-12 col-md-12">
                    <div class="bottom">

                        <div class="impl_heading">
                            <h1>Try Beep Services</h1></br>
                            <div class="row">
                                <img class="img-item-button3"
                                    src="{{asset('FrontEnd/assets/Fimg/images/sellcar.png')}}" />
                                <a href="/shop"><img class="img-item-button4"
                                        src="{{asset('FrontEnd/assets/Fimg/images/buy_car.png')}}"> </a>
                                <img class="img-item-button5"
                                    src="{{asset('FrontEnd/assets/Fimg/images/store.png')}}" />

                            </div>
                            <div class="row" style="padding-left: 5%; margin-left: 18%; padding-top: 1%;">

                                <a class="img-text-set8">QUICK SELL</a>
                                <a class="img-text-set7">QUICK BUY</a>
                                <a class="img-text-set7">ONLINE STORE</a>
                            </div>

                        </div>
                    </div>
                </div>
                <div class="Download_app">
                    <div class="col-lg-12 col-md-12">
                        <!------ Need Help Section Start ------>
                        <p class="download"><b>Download our app</b></p>
                        <div class="row">
                            <img class="appstore" src="{{asset('FrontEnd/assets/Fimg/images/appstore.png')}}" />
                            <img class="playstore" src="{{asset('FrontEnd/assets/Fimg/images/playstore.png')}}" />
                        </div>
                
                
                
                    </div>
                </div>


            </div>
        </div>

    </div>
    {{-- footer --}}
    @include('Frontend.Template.footer')

</body>


</html>