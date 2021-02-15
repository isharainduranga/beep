<?php
namespace App\Http\Controllers\BackEnd;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use Yajra\DataTables\DataTables;

use DB;

class SamrtsAdsControllers extends Controller
{
    function smartAds()
    {
        $data['content'] = 'Backend/Ads/smart';
        return view('Backend/Template/template', $data);
    }
    
    public function getsmartadsdata(Request $request)
    {

        if ($request->ajax()) {
            $data = DB::table('smart_ads');
          
            return Datatables::of($data)
                ->addIndexColumn()
                ->make(true);
        }
    }
}
