<?php

namespace vcsweb;

use Illuminate\Database\Eloquent\Model;

class ContadorObjParam extends Model
{
    //
    protected $table='contadorobjparams';
    protected $primaryKey='id';
    protected $fillable = ['idcamara','contenido'];
}
