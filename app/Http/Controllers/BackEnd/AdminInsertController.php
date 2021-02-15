<?php

namespace App\Http\Controllers\BackEnd;
use Illuminate\Http\Request;
use App\Models\AdminInsert;


class AdminInsertController extends Controller
{
    public function index(){
        $data['content'] = 'Backend/Admin/pageadmin';
        return view('Backend/Template/template', $data);
    }


    public function saveuserdetails(Request $request){

        // dd($request->all());    //this is important when record insert we can check its work or not using die dom
        $response = array();

        $imageName = 'admin_' . uniqid() . '_' . time() . '.' . request()->txt_propic->extension();
        request()->txt_propic->move(public_path('assets/backend/main/adminimg'), $imageName);

        try {
            $admin = new AdminInsert();  //model name show apper here
            $admin->fullname = request()->txt_full_name;
            $admin->email = request()->txt_email;
            $admin->password = bcrypt(request()->txt_password);
            $admin->proimage = $imageName;
            $admin->save();
            $response['status'] = 200;
            $response['message'] = 'Successfully Added!!';
           
        } 
        catch (Exception $e) {
            $response['status'] = 500;
            $response['message'] = 'Operation Failed!!';
        }
        echo json_encode($response);
    }
}