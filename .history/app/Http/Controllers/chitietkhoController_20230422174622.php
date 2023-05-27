<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\chitiethoadonnhap;

class chitiethoadonnhapController extends Controller
{
    public function index($pageid = 1){
        $db = chitiethoadonnhap::all();
        return view('chitiethoadonnhap',['db'=>$db]);
    }
}
