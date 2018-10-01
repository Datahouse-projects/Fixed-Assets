<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAssetsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('assets', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->integer('class_id')->unsigned();
            $table->foreign('class_id')->references('id')->on('classes');

            $table->integer('service_id')->unsigned();
            $table->foreign('service_id')->references('id')->on('services');

            $table->integer('model_id')->unsigned();
            $table->foreign('model_id')->references('id')->on('models');
            $table->integer('cost');
            $table->date('purchase_date');
            $table->date('disposal_date');
            $table->date('expire_date');
            $table->date('renewer_date');

            $table->integer('dp_history_id')->unsigned();
         $table->foreign('dp_history_id')->references('id')->on('depreciation_historys');
            $table->integer('current_cost');

            $table->integer('dp_type_id')->unsigned();
          $table->foreign('dp_type_id')->references('dp_type_id')->on('depreciation_types');

            $table->integer('location_id')->unsigned();
            $table->foreign('location_id')->references('id')->on('locations');
            $table->integer('size');
            $table->integer('purchased_period');
            $table->integer('last_run_period');
            $table->integer('earn_final_period');
            $table->integer('production_capacity');
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
        Schema::dropIfExists('assets');
    }
}
