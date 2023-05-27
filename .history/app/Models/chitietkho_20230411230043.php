<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class chitietkho extends Model
{
    use HasFactory;
    protected $table='chitietkho';
    protected $primarykey = 'MaChiTietKho';
    protected $fillable = ['MaChiTietKho','MaKho', 'MaSanPham', 'SoLuong', 'GiaTien'];
    public $timestamp=false;
}
