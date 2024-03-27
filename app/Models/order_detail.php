<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class order_detail extends Model
{
    use HasFactory;
    protected $table = 'order_details';

    protected $fillable = [
        'detail_id_order',
        'detail_id_produk',
        'detail_harga',
        'detail_jml'

    ];
}
