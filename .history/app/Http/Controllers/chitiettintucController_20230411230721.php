<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\chitiettintuc;

class chitiettintucController extends Controller
{
    public function index($pageid = 1){
        $db = chitiettintuc::all();
        return view('chitietkho',['db'=>$db]);
    }
}
