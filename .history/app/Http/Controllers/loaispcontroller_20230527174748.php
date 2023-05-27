<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\loaisp;

class loaispcontroller extends Controller
{
    public function index($pageid = 1){
        $db = loaisp::all();
        return view('loaisp',['db'=>$db]);
    }
    public function edit1(string $id){
      $db =  loaisp::where('MaLSP',$id)->first();
       dd($db);
        return view('loaispedit',['db'=>$db]);
    }
}
