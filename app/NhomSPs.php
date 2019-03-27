<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class NhomSPs extends Model
{
    protected $primaryKey = 'MaNSP';

    protected $fillable = ['TenNSP','MaDM'];
}
