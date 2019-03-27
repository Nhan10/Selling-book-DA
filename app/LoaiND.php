<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class LoaiND extends Model
{
    protected $primaryKey = 'MaLND';

    protected $fillable = ['TenLoai'];

    public function nguoiDungs()
    {
        return $this->hasMany('App\NguoiDungs','MaLND');
    }
}
