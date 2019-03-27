<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TrangThais extends Model
{
    protected $primaryKey = 'MaTT';

    protected $fillable = ['TenTT'];

    public function donHangs()
    {
        return $this->hasMany('App\DonHangs','MaTT');
    }
}
