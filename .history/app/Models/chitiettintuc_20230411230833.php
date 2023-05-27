<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class chitiettintuc extends Model
{
    use HasFactory;
    protected $table='chitietkho';
    protected $primarykey = 'MaChiTietKho';
    protected $fillable = ['MaChiTietKho','MaKho', 'MaSanPham', 'SoLuong'];
    public $timestamp=false;
}
