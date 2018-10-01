<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    //
    protected $fillable = [
        'last_service', 'service_cost', 'service_provider',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */

}
