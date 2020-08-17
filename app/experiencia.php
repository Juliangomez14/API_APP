<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class experiencia extends Model
{
    protected $table ='experiencias';
    protected $fillabled=['nombre_empresa','actividades_ejecutadas','fecha_inicio_contrato','fecha_fin_contrato'];

}
