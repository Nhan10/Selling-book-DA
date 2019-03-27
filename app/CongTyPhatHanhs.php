<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CongTyPhatHanhs extends Model
{
    protected $primaryKey = 'MaCTPH';

    protected $fillable = ['TenCTPH','DiaChi','SDT'];
}
