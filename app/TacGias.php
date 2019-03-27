<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TacGias extends Model
{
    protected $primaryKey = 'MaTG';

    protected $fillable = ['TenTG','DiaChi','SDT'];
}
