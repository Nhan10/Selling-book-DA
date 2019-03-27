<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class BinhLuans extends Model
{
    protected $primaryKey = 'MaBL';

    protected $fillable = ['MaND','MaSP','NoiDung','NgayBL'];
}
