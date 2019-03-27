<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SanPhams extends Model
{
    protected $primaryKey = 'MaSP';

    protected $fillable = [
        'MaLoai','TenSP','Gia','SoLuong','MaTG','MoTa','SoTrang','LoaiBia','KichThuoc',
        'CanNang','NgonNgu','NXB','NamXB','DichGia','MaCTPH'
    ];

    public function loaiSP()
    {
        return $this->belongsTo('App\LoaiSPs','MaLoai','MaSP');
    }

    public function congTyPhatHanh()
    {
        return $this->belongsTo('App\CongTyPhatHanhs','MaCTPH','MaSP');
    }

    public function hinhAnhs()
    {
        return $this->hasMany('App\HinhAnhs','MaSP');
    }

    public function nhaCungCaps()
    {
        return $this->hasMany('App\NhaCungCaps','MaSP');
    }

    public function cTDonHangs()
    {
        return $this->hasMany('App\CTDonHangs','MaSP');
    }

    public function tacGia()
    {
        return $this->belongsTo('App\TacGias','MaTG','MaSP');
    }

    public function binhLuans()
    {
        return $this->hasMany('App\BinhLuans','MaSP');
    }

    public function cTPhieuNhaps()
    {
        return $this->hasMany('App\CTPhieuNhap','MaSP');
    }
}
