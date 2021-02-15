<?php

namespace App\Http\Controllers\BackEnd;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Yajra\DataTables\DataTables;
use App\Models\TeammemberDataModel;

class BTeammemberController extends Controller
{
   //load page
   function index()
   {
       $data['content'] = 'Backend/Teammember/teammember';
       return view('Backend/Template/template', $data);
   }
   
  
   function save_teammember_details(Request $request)
   {
       // dd($request->all());    //this is important when record insert we can check its work or not using die dom
       //  if email exsist
       $response = array();

       $imageName = 'teammember_' . uniqid() . '_' . time() . '.' . request()->txt_propic->extension();
       request()->txt_propic->move(public_path('BackEnd/assets/teammemberimg'), $imageName);

       try {
           $teammember = new TeammemberDataModel();  //model name show apper here
           $teammember->fullname = request()->txt_full_name;
           $teammember->email = request()->txt_email;
           $teammember->password = bcrypt(request()->txt_password);
           $teammember->proimage = $imageName;
           $teammember->save();

           $response['status'] = 200;
           $response['message'] = 'Record Save Success!!';
       } catch (Exception $e) {
           $response['status'] = 500;
           $response['message'] = 'Operation Failed!!';
       }
       echo json_encode($response);
   }

   public function getteammemberdata(Request $request)
   {

       if ($request->ajax()) {
           $data = DB::table('teammember_data_models')
           ->where('active_status', '1');
           return Datatables::of($data)
               ->addIndexColumn()
               ->addColumn('action', function ($row) {
                   // $action = '
                   // <a class="mr-2" onclick="edit(this);"><i class="fa fa-pencil-square-o text-primary text-inverse" style="font-size: 18px;cursor: pointer;"></i></a>
                   // <meta name="csrf-token" content="{{ csrf_token() }}">
                   // <a class="" onclick="del(this);"><i class="fa fa-trash-o text-danger text-inverse" style="font-size: 18px;cursor: pointer;"></i></a>';

                   // return $action;
               })
               ->rawColumns(['action'])
               ->make(true);
       }
   }

   // get admin dat afir the table
   public function get_teammember_detail(Request $request)
   {
       $response = array();

       $result = DB::table('teammember_data_models')
           ->where('teammemberid', '=', $request->ID)
           ->get();

       if ($result) {
           $response['data'] = $result;
           $response['status'] = 200;
       } else {
           $response['status'] = 500;
           $response['message'] = "no data found";
       }
       // dd($response);   //this get for check the response as a console.
       echo json_encode($response);
   }

   public function delete_teammember_detail(Request $request)
   {
       $response = array();
       $data['active_status'] = 0;

       $result = DB::table('teammember_data_models')
           ->where('teammemberid', '=', $request->ID)
           ->update($data);

       if ($result) {
           $response['status'] = 200;
           $response['message'] = 'Team Member Removed Successfully!!';
       } else {
           $response['status'] = 500;
           $response['message'] = 'Team Member Removed Failed!!';
       }

       // dd($response);   //this get for check the response as a console.

       echo json_encode($response);
   }

   public function block_teammember(Request $request)
   {
       $response = array();
       $data['block_status'] = 1;

       $result = DB::table('teammember_data_models')
           ->where('teammemberid', '=', $request->ID)
           ->update($data);

       if ($result) {
           $response['status'] = 200;
           $response['message'] = 'Admin Removed Successfully!!';
       } else {
           $response['status'] = 500;
           $response['message'] = 'Admin Removed Failed!!';
       }

       // dd($response);   //this get for check the response as a console.

       echo json_encode($response);
   }


}
