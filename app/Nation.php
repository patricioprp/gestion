<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Nation extends Model
{
    protected $table = 'nations';
    protected $fillable = ['name'];
    public function provinces(){
    //relacion uno a muchos
    return $this->hasMany('\App\Province'); 
  }
}
