<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\donhang;

class donhangController extends Controller
{
    public function index($pageid = 1){
        $db = donhang::all();
        return view('donhang',['db'=>$db]);
    }
}
