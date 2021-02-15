<?php

namespace App\Http\Controllers\BackEnd;

use App\Http\Controllers\Controller;
use App\Models\AdminDataModel;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Yajra\DataTables\DataTables;



class BAdminController extends Controller
{
    //load page
    function index()
    {
        $data['content'] = 'Backend/Admin/adminmanage';
        return view('Backend/Template/template', $data);
    }
    
    function login()
    {
        return view('Backend/Login/login');
    }
    function save_user_details(Request $request)
    {
        // dd($request->all());    //this is important when record insert we can check its work or not using die dom
        //  if email exsist
        $response = array();

        $imageName = 'admin_' . uniqid() . '_' . time() . '.' . request()->txt_propic->extension();
        request()->txt_propic->move(public_path('BackEnd/assets/adminimg'), $imageName);

        try {
            $admin = new AdminDataModel();  //model name shou apper here
            $admin->fullname = request()->txt_full_name;
            $admin->email = request()->txt_email;
            $admin->password = bcrypt(request()->txt_password);
            $admin->proimage = $imageName;
            $admin->save();

            $response['status'] = 200;
            $response['message'] = 'Record Save Success!!';
        } catch (Exception $e) {
            $response['status'] = 500;
            $response['message'] = 'Operation Failed!!';
        }
        echo json_encode($response);
    }

    public function getusersdata(Request $request)
    {

        if ($request->ajax()) {
            $data = DB::table('admin_data_models')
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
    public function get_admin_detail(Request $request)
    {
        $response = array();

        $result = DB::table('admin_data_models')
            ->where('adminid', '=', $request->ID)
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

    public function delete_admin_detail(Request $request)
    {
        $response = array();
        $data['active_status'] = 0;

        $result = DB::table('admin_data_models')
            ->where('adminid', '=', $request->ID)
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

    public function block_admin(Request $request)
    {
        $response = array();
        $data['block_status'] = 1;

        $result = DB::table('admin_data_models')
            ->where('adminid', '=', $request->ID)
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
