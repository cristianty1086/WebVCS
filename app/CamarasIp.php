<?php

namespace vcsweb;

use Illuminate\Database\Eloquent\Model;

class CamarasIp extends Model
{    
    protected $table='camarasips';
    protected $primaryKey='idcamara';
    protected $fillable = ['username','passwd','modelo','url','idubicacion'];
}
