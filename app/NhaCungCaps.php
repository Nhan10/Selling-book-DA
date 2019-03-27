<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class NhaCungCaps extends Model
{
    protected $primaryKey = 'MaNCC';

    protected $fillable = ['TenNCC','DiaChi','SDT','MaSP'];

    public function sanPham()
    {
        return $this->belongsTo('App\SanPhams','MaSP','MaNCC');
    }
}
