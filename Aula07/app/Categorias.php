<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Categorias extends Model
{
    protected $fillable =
    [
        'id',
        'nome',
        'imagem'
    ];
    protected $table='Categorias';

    public function Jogos(){
        return $this->hasMany(Jogos::class, 'id');
    }

}
