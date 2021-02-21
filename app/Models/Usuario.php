<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Usuario extends Model
{
    use HasFactory;

    public function instituicao(){
        return $this->hasOne('App\Models\Instituicao');
        //REVER - Um usuário possui uma instituição ou mais de uma? 
    }
}