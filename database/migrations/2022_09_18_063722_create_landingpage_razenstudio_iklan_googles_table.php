<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLandingpageRazenstudioIklanGooglesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('landingpage_razenstudio_iklan_googles', function (Blueprint $table) {
            $table->id();
            $table->json('section_1')->nullable();
            $table->json('section_2')->nullable();
            $table->json('section_3')->nullable();
            $table->json('section_4')->nullable();
            $table->json('section_5')->nullable();
            $table->json('section_6')->nullable();
            $table->json('section_7')->nullable();
            $table->json('section_8')->nullable();
            $table->json('section_9')->nullable();
            $table->json('section_10')->nullable();
            $table->json('section_11')->nullable();
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
        Schema::dropIfExists('landingpage_razenstudio_iklan_googles');
    }
}
