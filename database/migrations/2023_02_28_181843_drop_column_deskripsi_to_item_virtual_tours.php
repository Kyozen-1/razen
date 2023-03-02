<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class DropColumnDeskripsiToItemVirtualTours extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('item_virtual_tours', function (Blueprint $table) {
            $table->dropColumn('deskripsi');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('item_virtual_tours', function (Blueprint $table) {
            //
        });
    }
}
