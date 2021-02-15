<?php

namespace App\Http\Controllers\BackEnd;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    //
    //load page
    function index()
    {
        $data['title'] = 'Dashboard';
        $data['navtitle'] = '/Dashboard';
        
        $data['content'] = 'Backend/Dashboard/dashboard';
        return view('Backend/Template/template', $data);
    }
}
