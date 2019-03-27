<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DanhMucSPs extends Model
{
    protected $primaryKey = 'MaDM';

    protected $fillable = ['TenDM'];
}
