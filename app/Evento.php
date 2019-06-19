<?php

namespace vcsweb;

use Illuminate\Database\Eloquent\Model;

class Evento extends Model
{
    //
    protected $table='eventos';
    protected $primaryKey='id';
    protected $fillable = ['idcamara','idtipoevento','fecha'];
}
