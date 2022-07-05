<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Detailgambar extends Model
{
    use HasFactory;

    protected $fillable = [
        'cover',
        'detail',
    ];
}
