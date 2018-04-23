<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Empleado extends Model
{
    protected $table = 'empleado';
    protected $fillable = ['turno','nombre','apellido','dni','telefono','email','password','empleado_id'];
}
