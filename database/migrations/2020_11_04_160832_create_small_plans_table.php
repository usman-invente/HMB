<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSmallPlansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('small_plans', function (Blueprint $table) {
            $table->id();
            $table->integer('user_id');
            $table->string('charge_id')->unique();
            $table->string('customer');
            $table->string('plan_id');
            $table->integer('amount');
            $table->string('currency');
            $table->string('plan_interval');
            $table->integer('plan_interval_count');
            $table->dateTime('current_period_start', $precision = 0);
            $table->dateTime('current_period_end', $precision = 0);
            $table->string('status');
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
        Schema::dropIfExists('small_plans');
    }
}
