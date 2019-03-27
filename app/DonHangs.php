<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DonHangs extends Model
{
    protected $primaryKey = 'MaDH';

    protected $fillable = ['MaND','TongTien','TenKH','DiaChi','SDT','NgayDat','NgayGiao','MaTT'];
}
