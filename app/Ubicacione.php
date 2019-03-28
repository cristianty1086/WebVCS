<?php

namespace vcsweb;

use Illuminate\Database\Eloquent\Model;

class Ubicacione extends Model
{
    //
    protected $table='ubicaciones';
    protected $primaryKey='idmetodoanalisis';
    protected $fillable = ['direccion','referencia','escena'];
}
