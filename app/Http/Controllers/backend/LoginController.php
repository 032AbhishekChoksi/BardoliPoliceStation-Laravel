<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function index(){
        return view('backend.login');
    }
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

        if($user_name == "bardolipolice100"){
            if($user_password == "1234"){
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
            $data = compact('message');
            return view('backend/login')->with($data);
        }
    }
}
