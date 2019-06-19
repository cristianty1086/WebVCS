<?php

namespace vcsweb;

use Illuminate\Database\Eloquent\Model;

class PlacasDetectada extends Model
{
    //
    protected $table='placasdetectadas';
    protected $primaryKey='id';
    protected $fillable = ['nombreimagen','ocr','idcamara','fecha'];
}
