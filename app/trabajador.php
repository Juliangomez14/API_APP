<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class trabajador extends Model
{
    protected $table ='trabajadores';
    protected $fillabled=['name','lastname','email','Telephone','adress','id_estado_disponibilidades'];

}
