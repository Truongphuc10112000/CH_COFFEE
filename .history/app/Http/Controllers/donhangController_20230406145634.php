<?php

namespace App\Http\Controllers;


use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\loaisp;

class donhangController extends Controller
{
    public function index($pageid = 1){
        $db = loaisp::all();
        return view('donhang',['db'=>$db]);
    }
}
