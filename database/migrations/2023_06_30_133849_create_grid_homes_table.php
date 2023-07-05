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
        Schema::create('grid_homes', function (Blueprint $table) {
            $table->id();
            $table->string('path');
            $table->string('name')->nullable();
            $table->string('remark')->nullable();
            $table->string('target')->nullable();
            $table->integer("order")->default(0);
            $table->boolean("enable")->default(1);
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
        Schema::dropIfExists('grid_homes');
    }
};
