<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class estudio extends Model
{
    protected $table ='estudios';
    protected $fillabled=['titulo_academico','universidad_institucion','year_finalizacion','lugar'];
}
