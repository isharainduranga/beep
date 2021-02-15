<?php

namespace App\Http\Controllers\BackEnd;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use Yajra\DataTables\DataTables;

use DB;


class DistrictControllers extends Controller
{
    function district()
    {
        $data['content'] = 'Backend/District/district';
        return view('Backend/Template/template', $data);
    }
    
    public function getdistrictdata(Request $request)
    {

        if ($request->ajax()) {
            $data = DB::table('district');
          
            return Datatables::of($data)
                ->addIndexColumn()
                ->make(true);
        }
    }
}
