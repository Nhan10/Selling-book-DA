<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class LoaiSPs extends Model
{
    protected $primaryKey = 'MaLoai';

    protected $fillable = ['TenLoai','MaNSP'];
}
