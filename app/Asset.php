<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Asset extends Model
{
    //
    protected $fillable = [
        'name','size', 'cost'
      ,'purchase_date','expire_date','renewer_date','rfid','barcode', 'serial'
        //,'current_cost','size',
        //'purchased_period','disposal_date',
       // 'earn_final_period','production_capacity'

        ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */

}
