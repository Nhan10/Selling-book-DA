<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PhieuNhaps extends Model
{
    protected $primaryKey = 'MaPN';

    protected $fillable = ['MaND','NgayNhap'];

    public function nguoiDung()
    {
        return $this->belongsTo('App\NguoiDungs','MaND','MaPN');
    }

    public function cTPhieuNhaps()
    {
        return $this->hasMany('App\CTPhieuNhaps','MaPN');
    }
}
