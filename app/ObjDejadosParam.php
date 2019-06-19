<?php

namespace vcsweb;

use Illuminate\Database\Eloquent\Model;

class ObjDejadosParam extends Model
{
    //
    protected $table='objdejadosparams';
    protected $primaryKey='id';
    protected $fillable = ['idcamara','contenido'];
}
