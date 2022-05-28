<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\Helpline;
use Illuminate\Http\Request;

class HelplineController extends Controller
{
    public function create(){
        $url = route('admin.helpline.create');
        $title = "Add Helpline";
        $breadTitle = "Add";
        $data = compact('url','title','breadTitle');
        return view('backend.helpline')->with($data);
    }

    public function store(Request $request){
        $request->validate(
            [
                'name'=>'required',
                'number'=>'required|numeric|min:3',
            ]
        );

        $helpline = new Helpline;
        $helpline->hname = $request['name'];
        $helpline->hnumber = $request['number'];

        $helpline->save();

        return redirect('admin/dashboard');
    }

    public function edit($id){
        $helpline = Helpline::find($id);
        if(is_null($helpline)){
           // not found
           return redirect('admin/dashboard');
        }else{
            // found
            $url =  route('admin.helpline.update',['id' => $id]);
            $title = "Edit Helpline";
            $breadTitle = "Edit";
            $data = compact('url','title','breadTitle','helpline');
            return view('backend.helpline')->with($data);
        }
    }

    public function update($id,Request $request){
        $request->validate(
            [
                'name'=>'required',
                'number'=>'required|numeric|min:3',
            ]
        );

        $helpline = Helpline::find($id);
        if(!is_null($helpline)){
            $helpline->hname = $request['name'];
            $helpline->hnumber = $request['number'];

            $helpline->save();
        }
        return redirect('admin/dashboard');
    }

    public function softDelete($id){
        $helpline = Helpline::find($id);
        if(!is_null($helpline)){
            $helpline->delete();
        }
        return redirect('admin/dashboard');
    }

    public function trash(){
        $helplines = Helpline::onlyTrashed()->get();

        $data = compact('helplines');
        return view('backend.trash.helpline')->with($data);
    }

    public function forceDelete($id){
        $helpline = Helpline::withTrashed()->find($id);
        if(!is_null($helpline)){
            $helpline->forceDelete();
        }
        return redirect('admin/dashboard');
    }

    public function restoreDelete($id){
        $helpline = helpline::withTrashed()->find($id);
        if(!is_null($helpline)){
            $helpline->restore();
        }
        return redirect('admin/dashboard');
    }

}
