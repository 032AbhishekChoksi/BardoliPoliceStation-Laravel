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
        return redirect('admin/dashboard');
    }
}
