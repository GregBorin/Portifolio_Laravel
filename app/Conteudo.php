<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Conteudo extends Model
{
    public function seccao(){
        return $this->belongsTo(Seccao::class);
    }
}
