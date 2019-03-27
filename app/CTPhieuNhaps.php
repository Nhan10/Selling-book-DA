<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CTPhieuNhaps extends Model
{
    protected $primaryKey = 'MaCTPN';

    protected $fillable = ['MaPN','MaSP','SoLuong','GhiChu'];
}
