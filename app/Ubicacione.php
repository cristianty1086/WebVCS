<?php

namespace vcsweb;

use Illuminate\Database\Eloquent\Model;

class Ubicacione extends Model
{
    //
    protected $table='ubicaciones';
    protected $primaryKey='id';
    protected $fillable = ['direccion','referencia','escena'];
}
