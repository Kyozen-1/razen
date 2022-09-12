<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLandingpageRazenstudioCommercialPhotographyPaketHargasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('landingpage_razenstudio_commercial_photography_paket_hargas', function (Blueprint $table) {
            $table->id();
            $table->longText('deskripsi')->nullable();
            $table->json('gambar')->nullable();
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
        Schema::dropIfExists('landingpage_razenstudio_commercial_photography_paket_hargas');
    }
}
