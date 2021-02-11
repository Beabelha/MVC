<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Usuário extends Model
{
    protected $fillable = [
        'id',
        'nome',
        'email',
        'github',
        'curso'
    ];

    protected $table='Usuarios';

    public function Jogos(){
        return $this->hasMany(Jogos::class, 'id');
    }

}
