<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class homecontroller extends Controller
{
    public function index(){
        $sp = sanphamModel::all();
        $lsp = loaispModel::all();
        return view('index' ,['sp' =>$sp, 'lsp' =>$lsp]);
    }
    public function c(){
        $sp = sanphamModel::all();
        $lsp = loaispModel::all();
        return view('index' ,['sp' =>$sp, 'lsp' =>$lsp]);
    }
    public function index()
    {
        return view('index');
    }
    public function todayspecial()
    {
        return view('todayspecial');
    }
    public function contact()
    {
        return view('contact');
    }
}