<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Perfil extends Model
{
    public function seccao_perfil(){
        return $this->hasMany(Seccao::class);
    }

}
