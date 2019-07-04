<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MyController extends Controller
{
    public function getList(){
        $user='hello';
        return view('test',['user'=>$user]);
    }
}
