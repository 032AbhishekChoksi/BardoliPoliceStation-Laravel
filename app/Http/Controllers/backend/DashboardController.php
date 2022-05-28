<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\Helpline;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index(){
        $helplines = Helpline::all();
        $data = compact('helplines');
        return view('backend.index')->with($data);
    }

    public function logout(){
        if(session()->has('admin_user')){
            session()->forget('admin_user');
        }
        return redirect('admin/login');
    }
}
