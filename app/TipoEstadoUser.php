<?php

namespace vcsweb;

use Illuminate\Database\Eloquent\Model;

class TipoEstadoUser extends Model
{
    //
    protected $table='tipoestadouser';
    protected $primaryKey='idestadouser';
    protected $fillable = ['estadocuenta'];
}
