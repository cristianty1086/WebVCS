<?php

namespace vcsweb;

use Illuminate\Database\Eloquent\Model;

class Engine extends Model
{
    //
    protected $table='engines';
    protected $primaryKey='id';
    protected $fillable = ['idcamara','metodoanalisis'];
}
