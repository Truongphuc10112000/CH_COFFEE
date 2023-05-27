<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class chitiedonhang extends Model
{
    use HasFactory;
    protected $table='donhang';
    protected $primarykey = 'MaDonHang';
    protected $fillable = ['MaDonHang','NgayDat', 'TrangThai', 'MaKhachHang'];
    public $timestamp=false;
}