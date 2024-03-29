<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLandingPageDigitalCampaignIklanGoogleTestimonisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('landing_page_digital_campaign_iklan_google_testimonis', function (Blueprint $table) {
            $table->id();
            $table->string('nama')->nullable();
            $table->string('gambar')->nullable();
            $table->string('testimoni')->nullable();
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
        Schema::dropIfExists('landing_page_digital_campaign_iklan_google_testimonis');
    }
}
