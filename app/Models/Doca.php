<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Doca extends Model
{
    use HasFactory;

    protected $fillable = [
        'status',
        'id_estacao',
    ];

    public function estacao(){
        return $this->belongsTo(Estacao::class);
    }

    public function bicicleta(){
        return $this->hasOne(Bicleta::class);
    }

}
