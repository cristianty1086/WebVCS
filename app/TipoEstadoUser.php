<?php

namespace vcsweb;

use Illuminate\Database\Eloquent\Model;

class TipoEstadoUser extends Model
{
    //
    protected $table='tipoestadouser';
    protected $primaryKey='id';
    protected $fillable = ['name'];
}
