<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Entrega extends Model
{
    use HasFactory;

    public function user(){
        //De la tabla usuario, se envia el atributo a la tabla de entrega
        return $this->belongsTo('App\Models\User');
    }

    public function tarea(){
        //De la tabla usuario, se envia el atributo a la tabla de entrega
        return $this->belongsTo('App\Models\Tarea');
    }
}
