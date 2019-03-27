<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class HinhAnhs extends Model
{
    protected $primaryKey = 'MaHA';

    protected $fillable = ['MaSP','DuongDan'];

    public function sanPham()
    {
        return $this->belongsTo('App\SanPhams','MaSP','MaHA');
    }
}
