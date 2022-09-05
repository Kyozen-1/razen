<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLandingpageRazenstudioFootersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('landingpage_razenstudio_footers', function (Blueprint $table) {
            $table->id();
            $table->text('deskripsi')->nullable();
            $table->json('solution')->nullable();
            $table->json('company')->nullable();
            $table->json('get_in_touch')->nullable();
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
        Schema::dropIfExists('landingpage_razenstudio_footers');
    }
}
