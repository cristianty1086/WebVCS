<?php

namespace vcsweb;

use Illuminate\Database\Eloquent\Model;

class Engine extends Model
{
    //
    protected $table='engines';
    protected $primaryKey='idengine';
    protected $fillable = ['idcamara','metodoanalisis'];
}
