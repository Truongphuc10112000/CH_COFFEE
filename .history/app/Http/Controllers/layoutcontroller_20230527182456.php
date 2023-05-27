<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;


class layoutControl extends Controller
{
    public function index($pa){

        return view('donhang',['db'=>$db]);
    }
}
