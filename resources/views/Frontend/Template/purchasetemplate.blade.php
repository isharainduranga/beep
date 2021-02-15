<!DOCTYPE html>
<html lang="en">

<head>

   
     <!-- CSRF Token -->
     <meta name="csrf-token" content="{{ csrf_token() }}"> 
     @include('Frontend.Template.header')

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
</style>
</head>

<body>

   
    <!------ Breadcrumbs Start ------>
    <div class="impl_bread_wrapper">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12">
                    <h1>purchase single</h1>
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">purchase single</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
    <!------ Purchase Car Start ------>
    <div class="impl_buy_wrapper">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-12">
                    <div class="impl_buycar_wrapper">
                        <div class="impl_buycar_color" id="color_car">
                            <div class="slider slider-for1" width="140px">
                                <div><img src="{{asset('FrontEnd/assets/Fimg/images/purchase/main_car.png')}}" alt=""></div>
                                <div>
                                    <h3><img src="{{asset('FrontEnd/assets/Fimg/images/purchase/main_car1.png')}}" alt=""></h3>
                                </div>
                                <div>
                                    <h3><img src="{{asset('FrontEnd/assets/Fimg/images/purchase/old_car.png')}}" alt=""></h3>
                                </div>
                                <div>
                                    <h3> <img src="{{asset('FrontEnd/assets/Fimg/images/purchase/main_car2.png')}}" alt=""></h3>
                                </div>
                                <div>
                                    <h3><img src="{{asset('FrontEnd/assets/Fimg/images/purchase/main_car1.png')}}" alt=""></h3>
                                </div>
                                <div>
                                    <h3><img src="{{asset('FrontEnd/assets/Fimg/images/purchase/car_spesi_img.jpg')}}" alt=""></h3>
                                </div>
                            </div>
                            <div class="slider slider-nav1">
                                <div><img src="{{asset('FrontEnd/assets/Fimg/images/purchase/car_part2.jpg')}}"   ></div>
                                <div><img src="{{asset('FrontEnd/assets/Fimg/images/purchase/car_part1.jpg')}}" style="margin-left: 5px;"></div>
                                <div><img src="{{asset('FrontEnd/assets/Fimg/images/purchase/old_car_thumb2.jpg')}}" height="54.7px" width="93px" style="margin-left: 10px;"></div>
                                <div><img src="{{asset('FrontEnd/assets/Fimg/images/purchase/car_part3.jpg')}}"  style="margin-left: 15px;"></div>
                                <div><img src="{{asset('FrontEnd/assets/Fimg/images/purchase/car_part1.jpg')}}" height="54.7px"  style="margin-left: 20px;"></div>
                                <div><img src= "{{asset('FrontEnd/assets/Fimg/images/purchase/car_spesi_img.jpg')}}" height="54.7px" style="margin-left: 25px;"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-12">
                    <div class="impl_buycar_data">
                        <h1>Expedition , Centaur </h1>
                        <h1>$81000 </h1>
                        <div class="car_emi_wrapper">
                            <span>Contact Seller 0771223423</span>
                          
                        </div>
                        <p>It is a long established fact that a reader will be distracted by the readable content of a
                            page when looking at its layout.</p>
                        <div class="impl_old_buy_btn">
                            <a href="checkout.html" class="impl_btn">Daily Bumping</a>
                            <a href="#" class="impl_btn">Bid now</a>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <!------ Car description wrapper Start ------>

    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12">
                <div class="impl_heading">
                    <h1>description</h1>
                </div>
            </div>
            <div class="col-lg-3 col-md-4">
                <div class="impl_descrip_box">
                    <h2>Car Brand</h2>
                    <p>Expedition ,</p>
                    <p>Centaur</p>
                </div>
            </div>
            <div class="col-lg-3 col-md-4">
                <div class="impl_descrip_box">
                    <h2>FUEL ECONOMY</h2>
                    <p>EPA combined/city/highway : </p>
                    <p>15-16/13/20-21 mpg</p>
                </div>
            </div>
            <div class="col-lg-3 col-md-4">
                <div class="impl_descrip_box">
                    <h2>ENGINE TYPE</h2>
                    <p>DOHC 32-valve V-8, aluminum</p>
                    <p>block and heads, port fuel</p>
                    <p>injection</p>
                </div>
            </div>
            <div class="col-lg-3 col-md-4">
                <div class="impl_descrip_box">
                    <h2>TRANSMISSION</h2>
                    <p>6-speed Automatic With Manual </p>
                    <p>Shifting Mode</p>
                </div>
            </div>
            <div class="col-lg-3 col-md-4">
                <div class="impl_descrip_box">
                    <h2>Displacement</h2>
                    <p>286 cu in, 4691 cc</p>
                    <p>Power: 454 hp @ 7000 rpm</p>
                    <p>Torque: 384 lb-ft @ 4750 rpm</p>
                </div>
            </div>
            <div class="col-lg-3 col-md-4">
                <div class="impl_descrip_box">
                    <h2>VEHICLE TYPE</h2>
                    <p>Front-Engine, </p>
                    <p>Rear-Wheel-Drive, </p>
                    <p>4-Passenger, 2-Door </p>
                    <p>Coupe or Convertible</p>
                </div>
            </div>
            <div class="col-lg-3 col-md-4">
                <div class="impl_descrip_box">
                    <h2>PERFORMANCE</h2>
                    <p>Zero to 60 mph: 4.5-4.7 sec</p>
                    <p>Standing ¼-mile: 13.0-13.2 sec</p>
                    <p>Top speed: 178-187 mph</p>
                </div>
            </div>
            <div class="col-lg-3 col-md-4">
                <div class="impl_descrip_box">
                    <h2>DIMENSIONS</h2>
                    <p>Wheelbase: 115.8 in</p>
                    <p>Length: 193.3-193.7 in</p>
                    <p>Width: 75.4 in Height: 54.3 in</p>
                    <p>Curb weight : 4400-4600 lb</p>
                </div>
            </div>
        </div>
    </div>
   
    

        @include('Frontend.Template.footer') 


</body>


</html>