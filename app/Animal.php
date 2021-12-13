<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Animal extends Model
{
    protected $table = "public.animais";

    protected $fillable = ['usuario_id','nome_animal','sexo_animal','cor_do_animal','raca_animal', 'porte_animal', 'imagem_animal'];

}
