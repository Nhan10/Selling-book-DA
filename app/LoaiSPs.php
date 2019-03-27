<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class LoaiSPs extends Model
{
    protected $primaryKey = 'MaLoai';

    protected $fillable = ['TenLoai','MaNSP'];

    public function nhomSP()
    {
        return $this->belongsTo('App\NhomSPs','MaNSP','MaLoai');
    }

    public function sanPhams()
    {
        return $this->hasMany('App\SanPhams','MaLoai');
    }
}
