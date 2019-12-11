<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Seccao extends Model
{
    public function perfil(){
        return $this->belongsTo(Perfil::class);
    }

    public function conteudo_seccao(){
        return $this->hasMany(Conteudo::class);
    }

}
