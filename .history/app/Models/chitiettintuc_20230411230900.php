<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class chitiettintuc extends Model
{
    use HasFactory;
    protected $table='chitiettintuc';
    protected $primarykey = 'MaChiTiet';
    protected $fillable = ['MaChiTiet','NoiDung', 'AnhChiTiet', 'SoLuong'];
    public $timestamp=false;
}
