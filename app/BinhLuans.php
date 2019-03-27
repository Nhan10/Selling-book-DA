<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class BinhLuans extends Model
{
    protected $primaryKey = 'MaBL';

    protected $fillable = ['MaND','MaSP','NoiDung','NgayBL'];

    public function sanPham()
    {
        return $this->belongsTo('App\SanPhams','MaSP','MaBL');
    }

    public function nguoiDung()
    {
        return $this->belongsTo('App\NguoiDungs','MaND','MaBL');
    }
}
