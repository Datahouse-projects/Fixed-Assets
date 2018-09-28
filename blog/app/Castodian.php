<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Castodian extends Model
{
    protected $fillable = [
        'asset_rfid', 'asset_serial_no', 'asset_barcode'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */


}
