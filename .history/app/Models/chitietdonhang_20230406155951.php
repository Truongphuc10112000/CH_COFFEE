<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class chitietdonhang extends Model
{
    use HasFactory;
    protected $table='chitietdonhang';
    protected $primarykey = 'MaChiTiet';
    protected $fillable = ['MaChiTiet','MaDonHang', 'TrangThai', 'MaKhachHang'];
    public $timestamp=false;
}
