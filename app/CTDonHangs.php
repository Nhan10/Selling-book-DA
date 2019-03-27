<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CTDonHangs extends Model
{
    protected $primaryKey = 'MaCTDH';

    protected $fillable = ['MaDH','MaSP','TenSP','Gia','SoLuong'];

    public function sanPham()
    {
        return $this->belongsTo('App\SanPhams','MaSP','MaCTDH');
    }

    public function donHang()
    {
        return $this->belongsTo('App\DonHangs','MaDH','MaCTDH');
    }
}
