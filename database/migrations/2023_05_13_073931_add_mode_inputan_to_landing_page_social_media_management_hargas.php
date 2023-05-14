<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddModeInputanToLandingPageSocialMediaManagementHargas extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('landing_page_social_media_management_hargas', function (Blueprint $table) {
            $table->enum('mode_inputan', ['table', 'card'])->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('landing_page_social_media_management_hargas', function (Blueprint $table) {
            //
        });
    }
}
