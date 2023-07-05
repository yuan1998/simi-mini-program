<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('grid_homes', function (Blueprint $table) {
            $table->integer('target_type')->default(0);
        });
        Schema::table('banners', function (Blueprint $table) {
            $table->integer('target_type')->default(0);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('grid_homes', function (Blueprint $table) {
            $table->dropColumn('target_type');
        });
        Schema::table('banners', function (Blueprint $table) {
            $table->dropColumn('target_type');
        });

    }
};
