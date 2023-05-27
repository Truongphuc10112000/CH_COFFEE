<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;

class loaisp extends Model
{
    use HasFactory;
    protected $table='loaisanpham';
    protected $primarykey = 'MaLoaiSanPham';
    protected $fillable = ['MaLoaiSanPham','TenLTenLoaiSanPham'];
    public $timestamp=false;
}
