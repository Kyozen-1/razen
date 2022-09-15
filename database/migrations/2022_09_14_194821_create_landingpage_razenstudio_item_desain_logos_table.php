<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLandingpageRazenstudioItemDesainLogosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('landingpage_razenstudio_item_desain_logos', function (Blueprint $table) {
            $table->id();
            $table->string('judul')->nullable();
            $table->string('gambar')->nullable();
            $table->string('harga')->nullable();
            $table->string('harga_custom')->nullable();
            $table->json('item_penilaian')->nullable();
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
        Schema::dropIfExists('landingpage_razenstudio_item_desain_logos');
    }
}
