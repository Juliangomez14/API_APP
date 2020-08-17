<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class perfilLaboral extends Model
{
    protected $table ='perfiles_laborales';
    protected $fillabled=['perfil','trabajadores_id'];

}
