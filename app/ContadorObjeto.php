<?php

namespace vcsweb;

use Illuminate\Database\Eloquent\Model;

class ContadorObjeto extends Model
{
    //
    protected $table='contadorobjetos';
    protected $primaryKey='id';
    protected $fillable = ['idcamara','fecha'];
}
