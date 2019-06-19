<?php

namespace vcsweb;

use Illuminate\Database\Eloquent\Model;

class UserRol extends Model
{
    //
    protected $table='user_rol';

    protected $fillable = [
        'user_id', 'role_id'
    ];

    public function user()
    {
        return $this->belongsTo('App\User');
    }
}
