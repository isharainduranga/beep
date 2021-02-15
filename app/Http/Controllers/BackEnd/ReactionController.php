<?php

namespace App\Http\Controllers\BackEnd;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use Yajra\DataTables\DataTables;

use DB;

class ReactionController extends Controller
{
    function reaction()
    {
        $data['content'] = 'Backend/Reaction/reaction';
        return view('Backend/Template/template', $data);
    }
    
    public function getreactiondata(Request $request)
    {

        if ($request->ajax()) {
            $data = DB::table('reaction');
          
            return Datatables::of($data)
                ->addIndexColumn()
                ->make(true);
        }
    }

}
