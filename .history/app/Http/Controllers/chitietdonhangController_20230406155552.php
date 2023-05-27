<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class chitietdonhangController extends Controller
{
    public function index($pageid = 1){
        $db = donhang::all();
        return view('donhang',['db'=>$db]);
    }
}
