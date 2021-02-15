<?php


namespace App\Http\Controllers\BackEnd;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use Yajra\DataTables\DataTables;

use DB;

class NormalAdsControllers extends Controller
{
    function normalAds()
    {
        $data['content'] = 'Backend/Ads/normalads';
        return view('Backend/Template/template', $data);
    }
    
    public function getnormaladsdata(Request $request)
    {

        if ($request->ajax()) {
            $data = DB::table('normal_ads');
          
            return Datatables::of($data)
                ->addIndexColumn()
                ->make(true);
        }
    }
}
