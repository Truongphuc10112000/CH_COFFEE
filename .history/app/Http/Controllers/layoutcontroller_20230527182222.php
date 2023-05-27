<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;


class layoutControl extends Controller
{
    public function index($pageid = 1){
  
        return view('donhang',['db'=>$db]);
    }
}
