<?php

namespace App\Http\Controllers\BackEnd;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use Yajra\DataTables\DataTables;

use DB;

class AdsController extends Controller
{
    function ads()
    {
        $data['content'] = 'Backend/Ads/ads';
        return view('Backend/Template/template', $data);
    }
    
    public function getadsdata(Request $request)
    {

        if ($request->ajax()) {
            $data = DB::table('ads');
          
            return Datatables::of($data)
                ->addIndexColumn()
                ->make(true);
        }
    }

}
