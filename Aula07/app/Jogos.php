<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Jogos extends Model
{
    protected $fillable = [
        'id',
        'nome',
        'descricao',
        'usuario_id',
        'categoria_id',
        'curso'
    ];
    protected $table='Usuarios';

    public function Categorias(){
        return $this->hasMany(Categorias::class, 'id');
    }

    public function Usuario(){
        return $this->belongsTo(Usuário::class, 'id');
    }
}
