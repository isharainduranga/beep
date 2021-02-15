<?php

namespace App\Http\Controllers\BackEnd;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\CustomerDataModel;
use Yajra\DataTables\DataTables;
use DB;
class BCustomerController extends Controller
{
    
    function register()
    {
        return view('Backend/Regsiter/registercustomer');
    }


    function addnewuser(){
         // dd($request->all());    //this is important when record insert we can check its work or not using die dom
        //  if email exsist
        $response = array();

        $imageName = 'admin_' . uniqid() . '_' . time() . '.' . request()->txt_propic->extension();
        request()->txt_propic->move(public_path('BackEnd/assets/adminimg'), $imageName);

        try {
            $admin = new CustomerDataModel();  //model name shou apper here
            $admin->fullname = request()->txt_username;
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

    function customer()
    {
        $data['content'] = 'Backend/Customer/customer';
        return view('Backend/Template/template', $data);
    }
    
    public function getcustomerdata(Request $request)
    {

        if ($request->ajax()) {
            $data = DB::table('customer_data_models');
          
            return Datatables::of($data)
                ->addIndexColumn()
                ->make(true);
        }
        
    }

}