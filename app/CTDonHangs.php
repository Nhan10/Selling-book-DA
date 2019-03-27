<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CTDonHangs extends Model
{
    protected $primaryKey = 'MaCTDH';

    protected $fillable = ['MaDH','MaSP','TenSP','Gia','SoLuong'];
}
