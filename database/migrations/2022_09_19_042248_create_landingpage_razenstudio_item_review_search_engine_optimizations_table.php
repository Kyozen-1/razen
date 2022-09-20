<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLandingpageRazenstudioItemReviewSearchEngineOptimizationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('landingpage_razenstudio_item_review_search_engine_optimizations', function (Blueprint $table) {
            $table->id();
            $table->text('studi_kasus')->nullable();
            $table->text('goals')->nullable();
            $table->text('result')->nullable();
            $table->string('gambar')->nullable();
            $table->string('bg_review')->nullable();
            $table->json('review')->nullable();
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
        Schema::dropIfExists('landingpage_razenstudio_item_review_search_engine_optimizations');
    }
}
