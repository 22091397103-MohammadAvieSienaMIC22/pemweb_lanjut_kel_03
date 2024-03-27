<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class user extends Model
{
    use HasFactory;
    protected $table = 'users';

    protected $primaryKey = 'user_id';

    protected $fillable = [
        'user_id',
        'user_email',
        'user_password',
        'user_nama',
        'user_alamat',
        'user_hp',
        'user_pos',
        'user_role',
        'user_aktif'

    ];
}
