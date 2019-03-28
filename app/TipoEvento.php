<?php

namespace vcsweb;

use Illuminate\Database\Eloquent\Model;

class TipoEvento extends Model
{
    //
    protected $table='tipoeventos';
    protected $primaryKey='idtipoevento';
    protected $fillable = ['descripcion','fecha'];
}
