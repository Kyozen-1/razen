<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLandingPageWebDevelopmentHargaWebsitesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('landing_page_web_development_harga_websites', function (Blueprint $table) {
            $table->id();
            $table->string('nama')->nullable();
            $table->text('landing_page')->nullable();
            $table->text('company_profile')->nullable();
            $table->text('e_commerce')->nullable();
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
        Schema::dropIfExists('landing_page_web_development_harga_websites');
    }
}
