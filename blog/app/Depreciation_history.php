<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Depreciation_history extends Model
{
    protected $fillable = [
        'current_dp', 'accumulated_dp', 'dp_run_date','dp_ratio','dp_day','dp_status','dp_month','dp_year'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */






}