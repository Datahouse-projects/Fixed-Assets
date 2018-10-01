<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Asset extends Model
{
    //
    protected $fillable = [
        'name', 'cost', 'purchase_date','disposal_date','expire_date','renewer_date','current_cost','size','purchased_period',
        'earn_final_period','production_capacity'

        ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */

}
