<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Frontendcontroller extends Controller
{
     
     function index(){   
        return view('Frontend/Template/hometemplate');
    }

    function accessories(){
        return view('Frontend/Template/accessoriestemplate');
    }
    function autoservices(){
        return view('Frontend/Template/autoservicestemplate');
    }
    function autoparts(){
        return view('Frontend/Template/autopartstemplate');
    }
    function shop(){
        return view('Frontend/Template/shoptemplate');
    }
    function postads(){
        return view('Frontend/Template/posttemplate');
    }


   
}
