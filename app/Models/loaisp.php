<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class loaisp extends Model
{
    use HasFactory;
    protected $table='loaisanpham';
    protected $primarykey = 'MaLoaiSanPham';
    protected $fillable = ['MaLoaiSanPham','TenLTenLoaiSanPham'];
    public $timestamp=false;
}
