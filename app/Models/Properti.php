<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Properti extends Model
{
    use HasFactory;

    protected $fillable = [
        'nama_properti',
        'descripsi',
        'category_id',
        'harga',
        'lokasi',
        'gambar',
    ];
}
