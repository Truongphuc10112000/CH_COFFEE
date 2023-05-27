<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;


class layout extends Controller
{
    public function index($pageid = 1){
        $db = donhang::all();
        return view('donhang',['db'=>$db]);
    }
}
