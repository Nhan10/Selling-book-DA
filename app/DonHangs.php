<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DonHangs extends Model
{
    protected $primaryKey = 'MaDH';

    protected $fillable = ['MaND','TongTien','TenKH','DiaChi','SDT','NgayDat','NgayGiao','MaTT'];

    public function nguoiDung()
    {
        return $this->belongsTo('App\NguoiDungs','MaND','MaDH');
    }

    public function cTDonHangs()
    {
        return $this->hasMany('App\CTDonHangs','MaDH');
    }

    public function trangThai()
    {
        return $this->belongsTo('App\TrangThais','MaTT','MaDH');
    }
}
