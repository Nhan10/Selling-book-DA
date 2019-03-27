<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class NhomSPs extends Model
{
    protected $primaryKey = 'MaNSP';

    protected $fillable = ['TenNSP','MaDM'];

    public function danhMucSP()
    {
        return $this->belongsTo('App\DanhMucSPs','MaDM','MaNSP');
    }

    public function loaiSPs()
    {
        return $this->hasMany('App\LoaiSPs','MaNSP');
    }
}
