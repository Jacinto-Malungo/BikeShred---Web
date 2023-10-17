<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Aluguel extends Model
{
    use HasFactory;

    protected $fillable = [
        'bicicleta_id',
        'doca_id',
        'user_id',
    ];

}
