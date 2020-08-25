<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTicketsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tickets', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('employee_id')->unsigned();
            $table->bigInteger('user_id')->unsigned();
            $table->bigInteger('station_id')->unsigned();
            $table->bigInteger('fuel_id' )->unsigned();
            $table->string('sales_assist' )->nullable();
            $table->string('store' )->nullable();
            $table->string('plate_no' )->nullable();
            $table->float('qty' )->default(0);
            $table->float('unit_price')->default(0);
            $table->float('tot_price')->default(0);
            $table->smallInteger('status')->default(0);
            $table->string('serial')->nullable();
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
        Schema::dropIfExists('tickets');
    }
}
