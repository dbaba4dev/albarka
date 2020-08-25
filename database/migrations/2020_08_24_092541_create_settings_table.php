<?php

use App\Setting;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSettingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('settings', function (Blueprint $table) {
            $table->id();
            $table->string('site_name');
            $table->string('contact_number');
            $table->string('contact_email');
            $table->string('contact_address');
            $table->timestamps();
        });

        Setting::create([
            'site_name' =>"Albarka Drainage",
            'contact_address' =>"Maiduguri, Borno State",
            'contact_number' =>"08022775600",
            'contact_email' =>"info@albarka.com"
        ]);

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('settings');
    }
}
