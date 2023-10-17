<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{
    
    protected $fillable = [
        'saldo',
        'username',
        'genero',
        'id_user',
    ];

    public function user()
    {
        //Aqui fizemos de relacionamento belongsTo, quer dizer 1 role pertence a 
        return $this->belongsTo(User::class, 'id_user');
    }
}
