<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class order extends Model
{
    use HasFactory;
        protected $table = 'orders';
        protected $primaryKey = 'order_id';
        protected $fillable = [
            'order_id',
            'order_id_user',
            'order_tgl',
            'order_code',
            'order_ttl',
            'order_kurir',
            'order_ongkir',
            'order_byr_deadline',
            'order_batal'
        ];

}
