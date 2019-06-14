<?php

namespace vcsweb;

use Illuminate\Database\Eloquent\Model;

class CamaraIp extends Model
{
    //
    protected $table='camarasip';
    protected $primaryKey='id';
    protected $fillable = ['username','passwd','modelo','url','ubicacion_id'];
}
