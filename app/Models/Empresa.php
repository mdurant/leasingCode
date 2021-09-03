<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Empresa extends Model
{
    use HasFactory;


    // relacion 1-1
    public function sucursal (){
        return $this->hasOne('App\Models\Sucursal');
    }

    public function profesion (){
        return $this->hasOne('App\Models\Profesion');
    }

    public function estadoCivil (){
        return $this->hasOne('App\Models\estadoCivil');
    }

    public function pais (){
        return $this->hasOne('App\Models\Pais');
    }

}
