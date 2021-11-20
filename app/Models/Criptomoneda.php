<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Criptomoneda extends Model
{
    protected $table='criptomoneda';
    public $timestamps=false;
    protected $fillable=[
        'id', 'nombre','precio','descripcion', 'lenguaje_id',
    ];

    protected $primaryKey='id';
}
