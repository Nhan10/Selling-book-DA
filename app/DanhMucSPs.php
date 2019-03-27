<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DanhMucSPs extends Model
{
    protected $primaryKey = 'MaDM';

    protected $fillable = ['TenDM'];

    public function nhomSPs()
    {
        return $this->hasMany('App\NhomSPs','MaDM');
    }
}
