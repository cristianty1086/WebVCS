<?php

namespace vcsweb;

use Illuminate\Database\Eloquent\Model;

class PlacasDetectada extends Model
{
    //
    protected $table='placasdetectadas';
    protected $primaryKey='idplaca';
    protected $fillable = ['nombreimagen','ocr','idcamara','fecha'];
}
