<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class estudioTrabajador extends Model
{
    protected $table ='estudios_trabajadores';
    protected $fillabled=['perfiles_laborales_id','estudios_id'];

}
