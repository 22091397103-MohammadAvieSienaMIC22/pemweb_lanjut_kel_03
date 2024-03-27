<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class kategori extends Model
{
    use HasFactory;

    protected $table = 'kategoris';

    protected $primaryKey = 'kat_id';

    protected $fillable = [
        'kat_id',
        'kat_nama',
        'kat_keterangan'

    ];
}
