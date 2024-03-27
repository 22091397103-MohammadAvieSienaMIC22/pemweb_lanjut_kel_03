<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class keranjang extends Model
{
    use HasFactory;
    protected $table = 'keranjangs';

    protected $primaryKey = 'ker_id';

    protected $fillable = [
        'ker_id',
        'ker_id_user',
        'ker_id_produk',
        'ker_harga',
        'ker_jml'

    ];
}
