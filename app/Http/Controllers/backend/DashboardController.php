<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index(){
        return view('backend.index');
    }

    public function logout(){
        if(session()->has('admin_user')){
            session()->forget('admin_user');
        }
        return redirect('admin/login');
    }
}
