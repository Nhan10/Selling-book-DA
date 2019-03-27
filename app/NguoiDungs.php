<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;

class NguoiDungs extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $primaryKey = 'MaND';
    protected $fillable = [
        'TenND', 'email', 'password','DiaChi','SDT','active','MaLND'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function loaiND()
    {
        return $this->belongsTo('App\LoaiND','MaLND','MaND');
    }

    public function xacThucNDs()
    {
        return $this->hasMany('App\XacThucND','MaND');
    }

    public function binhLuans()
    {
        return $this->hasMany('App\BinhLuans','MaND');
    }

    public function phieuNhaps()
    {
        return $this->hasMany('App\PhieuNhaps','MaND');
    }

    public function donHangs()
    {
        return $this->hasMany('App\DonHangs','MaND');
    }
}
