<?php

namespace App\Http\Controllers\BackEnd;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use Yajra\DataTables\DataTables;

use DB;

class CitiesControllers extends Controller
{
    function city()
    {
        $data['content'] = 'Backend/City/city';
        return view('Backend/Template/template', $data);
    }
    
    public function getcitydata(Request $request)
    {

        if ($request->ajax()) {
            $data = DB::table('city');
          
            return Datatables::of($data)
                ->addIndexColumn()
                ->make(true);
        }
    }
}
