<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAssetsTables extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('asset', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->integer('class_id');
            $table->integer('cost');
            $table->date('purchase_date');
            $table->integer('old_value');
            $table->date('disposal_date');
            $table->date('expire_date');
            $table->date('renewer_date');
            $table->integer('current_dp');
            $table->integer('cummulative_dp');
            $table->integer('current_cost');
            $table->integer('dp_type_id');
            $table->integer('barcode');
            $table->integer('rfid');
            $table->integer('serial_no');
            $table->integer('location_id');
            $table->string('dp_status');
            $table->integer('size');
            $table->date('dp_run_date');
            $table->integer('dp_ratio');
            $table->integer('dp_day');
            $table->integer('dp_year');
            $table->integer('dp_month');
            $table->integer('purchased_period');
            $table->integer('last_run_period');
            $table->integer('earn_final_period');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('asset');
    }
}
