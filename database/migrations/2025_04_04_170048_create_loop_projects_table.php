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
        Schema::create('loop_projects', function (Blueprint $table) {
            $table->id();
            $table->string("name");
            $table->json("award_list");
            $table->string("share_title")->nullable();
            $table->string("share_description")->nullable();
            $table->string("share_image")->nullable();
            $table->unsignedInteger("limit_lottery_count")->default(0);
            $table->unsignedInteger("limit_day_lottery_count")->default(0);
            $table->boolean('enable')->default(0);
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
        Schema::dropIfExists('loop_projects');
    }
};
