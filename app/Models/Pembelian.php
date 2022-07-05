<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pembelian extends Model
{
    use HasFactory;

    protected $fillable = [
        'nama',
        'email',
        'category_id',
        'type_unit',
        'no_hp',
        'alamat',
    ];
}
