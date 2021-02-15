<?php

namespace App\Http\Controllers\BackEnd;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use Yajra\DataTables\DataTables;

use DB;

class AuctionController extends Controller
{
    function auction()
    {
        $data['content'] = 'Backend/Auction/auction';
        return view('Backend/Template/template', $data);
    }
    
    public function getauctiondata(Request $request)
    {

        if ($request->ajax()) {
            $data = DB::table('sub_categories');
          
            return Datatables::of($data)
                ->addIndexColumn()
                ->make(true);
        }
    }

}
