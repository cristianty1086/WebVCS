<?php

namespace vcsweb;

use Illuminate\Database\Eloquent\Model;

class MetodoBaseParam extends Model
{
    //
    protected $table='metodobaseparams';
    protected $primaryKey='id';
    protected $fillable = ['idcamara','contenido'];
}
