<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Lenguaje extends Model
{
    protected $table='lenguaje_programacion';
    public $timestamps=false;
    protected $fillable=[
        'id', 'descripcion'
    ];

    protected $primaryKey='id';
}
