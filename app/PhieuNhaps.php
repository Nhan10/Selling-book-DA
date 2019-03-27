<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PhieuNhaps extends Model
{
    protected $primaryKey = 'MaPN';

    protected $fillable = ['MaND','NgayNhap'];
}
