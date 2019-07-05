<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Curso extends Model
{
    // Necessário para salvar os dados em massa
    protected $fillable = [
        'titulo', 'descricao', 'valor', 'imagem', 'publicado'
    ];
}
