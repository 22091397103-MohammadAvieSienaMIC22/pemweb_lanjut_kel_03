<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class produk extends Model
{
    use HasFactory;
        protected $table = 'produks';
        protected $primaryKey = 'produk_id';
        protected $fillable = [
            'produk_id',
            'produk_id_kat',
            'produk_id_user',
            'produk_code',
            'produk_nama',
            'produk_hrg',
            'produk_keterangan',
            'produk_stock',
            'produk_photo'
        ];
}
