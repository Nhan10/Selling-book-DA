<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SanPhams extends Model
{
    protected $primaryKey = 'MaSP';

    protected $fillable = [
        'MaLoai','TenSP','Gia','SoLuong','MaTG','MoTa','SoTrang','LoaiBia','KichThuoc',
        'CanNang','NgonNgu','NXB','NamXB','DichGia','MaCTPH'
    ];
}
