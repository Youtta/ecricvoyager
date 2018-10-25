<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class Club extends Model
{
    protected $fillable = [
        'photo','name','level_id'
    ];

    public  function levels()
    {
        return $this->belongsTo('App\Level');
    }


}
