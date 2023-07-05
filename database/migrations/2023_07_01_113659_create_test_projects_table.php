<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('test_projects', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('remark')->nullable();
            $table->boolean('enable')->default(1);
            $table->json('question_data')->nullable();
            $table->text('end_msg')->nullable();


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
        Schema::dropIfExists('test_projects');
    }
};
