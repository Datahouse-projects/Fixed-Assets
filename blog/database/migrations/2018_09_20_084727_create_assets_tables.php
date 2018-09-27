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
            $table->foreign('class_id')->references('id')->on('assets_class');
            $table->foreign('service_id')->references('id')->on('assets_service');
            $table->foreign('model_id')->references('id')->on('asset_model');
            $table->foreign('vendor_id')->references('id')->on('asset_vendor');
            $table->integer('cost');
            $table->date('purchase_date');
            $table->date('disposal_date');
            $table->date('expire_date');
            $table->date('renewer_date');
            $table->foreign('depreciation_history')->references('id')->on('depreciation_history');
            $table->integer('current_cost');
            $table->foreign('dp_type_id')->references('dp_type_id')->on('depreciation_type');
            $table->foreign('castodian_id')->references('castodian_id')->on('assetd_castodian');
            $table->foreign('location_id')->references('location_id')->on('assets_location');
            $table->integer('size');
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
