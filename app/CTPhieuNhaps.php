<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CTPhieuNhaps extends Model
{
    protected $primaryKey = 'MaCTPN';

    protected $fillable = ['MaPN','MaSP','SoLuong','GhiChu'];

    public function sanPham()
    {
        return $this->belongsTo('App\SanPhams','MaSP','MaCTPN');
    }

    public function phieuNhap()
    {
        return $this->belongsTo('App\PhieuNhaps','MaPN','MaCTPN');
    }
}
