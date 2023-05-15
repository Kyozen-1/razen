<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLandingPageVideoProductionVideoAnimasiHargaJasasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('landing_page_video_production_video_animasi_harga_jasas', function (Blueprint $table) {
            $table->id();
            $table->string('nama')->nullable();
            $table->json('standard')->nullable();
            $table->json('premium')->nullable();
            $table->json('ultimate')->nullable();
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
        Schema::dropIfExists('landing_page_video_production_video_animasi_harga_jasas');
    }
}
