<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLandingPageBerandaBiayasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('landing_page_beranda_biayas', function (Blueprint $table) {
            $table->id();
            $table->string('nama')->nullable();
            $table->json('in_house')->nullable();
            $table->json('freelance')->nullable();
            $table->json('digital_agency_hub')->nullable();
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
        Schema::dropIfExists('landing_page_beranda_biayas');
    }
}
