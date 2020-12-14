<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tarea extends Model
{
    use HasFactory;

    public function entregas(){
        //De la tabla usuario, se envia el atributo a la tabla de entrega
        return $this->hasMany('App\Models\Entrega');
    }
}
