<?php

namespace vcsweb;

use Illuminate\Database\Eloquent\Model;

class CercoVirtualParam extends Model
{
    //
    protected $table='cercovirtualparams';
    protected $primaryKey='idcercoparam';
    protected $fillable = ['idcamara','contenido','width','height'];
}
