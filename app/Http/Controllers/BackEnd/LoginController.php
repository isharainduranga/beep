<?php

namespace App\Http\Controllers\BackEnd;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    // function log(){

    //     //$data['content'] = 'Backend/Dashboard/dashboard';
    //     return view('Backend/Login/loginscript');

    // }


    function index()
    {
        return view('Backend/Login/login');
    }

    function userLogin(Request $req)
    {
        //    return $req->input();    // this is just keep for testing purpose 

        $data = $req->input();
        $req->session()->put('txt_email', $data['txt_email']);
        // echo session('txt_email');    //we can get specific value one by one using this specifcations;
        return redirect('dashboard');

    }
}
