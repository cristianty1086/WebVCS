<?php

namespace vcsweb;

use Illuminate\Database\Eloquent\Model;

class MetodoAnalisi extends Model
{
    //
    protected $table='metodoanalisis';
    protected $primaryKey='id';
    protected $fillable = ['name'];
}
