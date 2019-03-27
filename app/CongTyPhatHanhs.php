<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CongTyPhatHanhs extends Model
{
    protected $primaryKey = 'MaCTPH';

    protected $fillable = ['TenCTPH','DiaChi','SDT'];

    public function sanPhams()
    {
        return $this->hasMany('App\SanPhams','MaCTPH');
    }
}
