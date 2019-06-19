<?php

namespace vcsweb;

use Illuminate\Database\Eloquent\Model;

class RostrosDetectado extends Model
{
    //
    protected $table='rostrosdetectados';
    protected $primaryKey='id';
    protected $fillable = ['nombrepersona','nombreimagen','idcamara','fecha'];
}
