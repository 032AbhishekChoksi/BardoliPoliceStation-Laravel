<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\Admin;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    // Login Page
    public function index(){
        return view('backend.login');
    }

    // Create Static User using Database
    public function store(){
        $password = '1234';
        $admin = new Admin;
        $admin->user_name = 'bardolipolice100';
        $admin->password = password_hash($password, PASSWORD_BCRYPT);
        $admin->email = 'bardolipolice100@gmail.com';
        $admin->mobile = '02622220168';

        $admin->save();
        echo "<h1>Admin Added Successfully</h1>";
        die();
    }

    // Login User
    public function login(Request $request){
        $request->validate(
            [
                'adminname'=>'required',
                'adminpassword'=>'required'
            ]
        );

        $message = "Invalid ";
        $user_name = $request['adminname'];
        $user_password = $request['adminpassword'];

        $admin = Admin::where('user_name','=',$user_name)->get();

        if(count($admin)>0){
            $db_password = $admin[0]['password'];
            if(password_verify($user_password, $db_password)){
                session()->put('admin_user',$user_name);
                return redirect('admin/dashboard');
            }
            else{
                $message = $message . "User Password";
                $data = compact('message','user_name');
                return view('backend/login')->with($data);
            }
        }
        else{
            $message = $message . "User Name";
            $data = compact('message','user_name');
            return view('backend/login')->with($data);
        }
    }
}
