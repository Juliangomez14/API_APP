<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class experienciaTrabajador extends Model
{
    protected $table ='experiencia_trabajadores';
    protected $fillabled=['trabajadores_id','experiencias_id'];

}
