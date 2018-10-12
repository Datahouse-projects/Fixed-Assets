<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Vendor extends Model
{
    protected $fillable = [
        'name','phone','email','website'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */

}
