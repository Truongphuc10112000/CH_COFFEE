<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class homecontroller extends Controller
{
    public function index(){
        $sp = sanphamModel::all
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
