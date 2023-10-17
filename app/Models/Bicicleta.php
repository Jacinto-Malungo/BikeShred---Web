<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bicicleta extends Model
{
    use HasFactory;

    protected $fillable = [
        'modelo',
        'status',
        'image',
    ];

    public function estacao(){
        return $this->hasMany(Estacao::class);
    }

    public function doca(){
        return $this->belongsTo(Doca::class);
    }

}
