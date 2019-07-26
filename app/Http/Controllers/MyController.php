<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\test;

class MyController extends Controller
{
    public function getList(){
        $list=test::all();
        return view('test',['list'=>$list]);
    }
    public function getInsert(Request $request){
        $insert = new test;
        $insert->ten = $request->add_tensv;
        $insert->sokitu = $request->add_sokitu;
        $insert->ngaytao = $request->add_ngaytao;
        $insert->fieldmoi = $request->add_fieldmoi;
        $insert->save();
        return redirect('admin/home');
    }
    public function getVidu(Request $request){
        echo $request->vidu;
    }
}
