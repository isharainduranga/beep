<?php





//index page
  Route::get('/ ','App\Http\Controllers\Frontendcontroller@index');

  //accessories page
  Route::get('/accessories ','App\Http\Controllers\Frontendcontroller@accessories');

  //autoservices page
  Route::get('/autoservices ','App\Http\Controllers\Frontendcontroller@autoservices');

   //autoparts page
   Route::get('/autoparts','App\Http\Controllers\Frontendcontroller@autoparts');

   //purchase page
   Route::get('/purchase','App\Http\Controllers\Frontendcontroller@purchase');

    //shop page
    Route::get('/shop','App\Http\Controllers\Frontendcontroller@shop');

    //postads
    Route::get('/postads','App\Http\Controllers\Frontendcontroller@postads');


    
  //BCustomerController
  Route::get('/register','App\Http\Controllers\BackEnd\BCustomerController@register');
  // save user record
   Route::post('save', 'App\Http\Controllers\BackEnd\BCustomerController@addnewuser'); 

Route::get('/customer', 'App\Http\Controllers\BackEnd\BCustomerController@customer'); 
//show aution table
Route::get('/customershow', 'App\Http\Controllers\BackEnd\BCustomerController@getcustomerdata'); 
 

//login
Route::get('/login','App\Http\Controllers\BackEnd\LoginController@index');


// DashboardController
Route::get('/dashboard','App\Http\Controllers\BackEnd\DashboardController@index');
Route::get('/admin', 'App\Http\Controllers\BackEnd\BAdminController@index'); 

//auctioncontroller
Route::get('/auction', 'App\Http\Controllers\BackEnd\AuctionController@auction'); 
//show aution table
Route::get('/auctionshow', 'App\Http\Controllers\BackEnd\AuctionController@getauctiondata'); 


//adscontroller
Route::get('/ads', 'App\Http\Controllers\BackEnd\AdsController@ads'); 
//show aution table
Route::get('/adsshow', 'App\Http\Controllers\BackEnd\AdsController@getadsdata'); 

//reaction controller
Route::get('/reaction', 'App\Http\Controllers\BackEnd\ReactionController@reaction'); 
//show reaction table
Route::get('/reactionshow', 'App\Http\Controllers\BackEnd\ReactionController@getreactiondata');

//city controller
Route::get('/city', 'App\Http\Controllers\BackEnd\CitiesControllers@city'); 
//show city table
Route::get('/cityshow', 'App\Http\Controllers\BackEnd\CitiesControllers@getcitydata');

//district controller
Route::get('/district', 'App\Http\Controllers\BackEnd\DistrictControllers@district'); 
//show district table
Route::get('/districtshow', 'App\Http\Controllers\BackEnd\DistrictControllers@getdistrictdata');

//normal ads controller
Route::get('/normalads', 'App\Http\Controllers\BackEnd\NormalAdsControllers@normalAds'); 
//show normal ads table
Route::get('/normaladsshow', 'App\Http\Controllers\BackEnd\NormalAdsControllers@getnormaladsdata');

//smart controller
Route::get('/smartads', 'App\Http\Controllers\BackEnd\SamrtsAdsControllers@smartAds'); 
//show smart ads table
Route::get('/smartadsshow', 'App\Http\Controllers\BackEnd\SamrtsAdsControllers@getsmartadsdata');



Route::post('saveuserdetails', 'App\Http\Controllers\BackEnd\BAdminController@save_user_details');  // create user route
//admin crud 
// data table ajax
Route::get('/users', 'App\Http\Controllers\BackEnd\BAdminController@getusersdata'); // CategoryController
// getData BAdminController
Route::POST('/getData', 'App\Http\Controllers\BackEnd\BAdminController@get_admin_detail'); // CategoryController
// delete_admin_detail
Route::POST('/delete', 'App\Http\Controllers\BackEnd\BAdminController@delete_admin_detail'); // CategoryController
// delete
Route::POST('/block', 'App\Http\Controllers\BackEnd\BAdminController@block_admin'); // CategoryController


//BTeammemberCrontroller
Route::get('/teammember', 'App\Http\Controllers\BackEnd\BTeammemberController@index'); 

Route::post('/saveteammemberdetails', 'App\Http\Controllers\BackEnd\BTeammemberController@save_teammember_details');  // create teammember route


//teammeber crud 
// data table ajax
Route::get('/teammemberuser', 'App\Http\Controllers\BackEnd\BTeammemberController@getteammemberdata'); // CategoryController
// getData BAdminController
Route::POST('/getTeammemberData', 'App\Http\Controllers\BackEnd\BTeammemberController@get_teammember_detail'); // CategoryController
// delete_admin_detail
Route::POST('/deleteteammember', 'App\Http\Controllers\BackEnd\BTeammemberController@delete_teammember_detail'); // CategoryController
// delete
Route::POST('/blockteammember', 'App\Http\Controllers\BackEnd\BAdminController@block_teammember'); // CategoryController




