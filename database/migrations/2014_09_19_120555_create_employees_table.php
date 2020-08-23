<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEmployeesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('employees', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('category_id')->unsigned();
            $table->string('first_name');
            $table->string('surname');
            $table->float('factor')->default(0);
            $table->float('balance')->default(0);
            $table->float('salary')->default(0);
            $table->enum('payment_type',['commission','salary','both'])->default('commission'); // 0: commission, 1: salary, 2: both
            $table->text('joined')->nullable();
            $table->tinyInteger('status')->default(1);
            $table->string('phone')->nullable();
            $table->string('email')->nullable();
            $table->string('address');
            $table->unsignedInteger('lga_id');
            $table->unsignedInteger('state_id');
            $table->bigInteger('photo_id')->nullable()->unsigned();
            $table->string('next_of_king_name')->nullable();
            $table->string('next_of_king_relationship')->nullable();
            $table->string('next_of_king_phone')->nullable();
            $table->string('next_of_king_address')->nullable();
            $table->timestamps();

            $table->foreign('category_id')->references('id')->on('categories');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('employees');
    }
}
