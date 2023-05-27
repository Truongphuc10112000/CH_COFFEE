<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class donhangController extends Controller
{
    public function index($pageid = 1){
        $db = loaisp::all();
        return view('donhang',['db'=>$db]);
    }
}
