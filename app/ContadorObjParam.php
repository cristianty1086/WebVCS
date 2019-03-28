<?php

namespace vcsweb;

use Illuminate\Database\Eloquent\Model;

class ContadorObjParam extends Model
{
    //
    protected $table='contadorobjparams';
    protected $primaryKey='idcontparam';
    protected $fillable = ['idcamara','contenido'];
}
