<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Depreciation_type extends Model
{
    protected $fillable = [
        'dp_type_id', 'current_dp', 'old_value','dp_ratio'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */

}