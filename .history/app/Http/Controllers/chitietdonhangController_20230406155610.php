<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\chitietdonhang;

class chitietdonhangController extends Controller
{
    public function index($pageid = 1){
        $db = chitietdonhang::all();
        return view('donhang',['db'=>$db]);
    }
}
