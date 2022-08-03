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
        Schema::create('features', function (Blueprint $table) {
            $table->id('feature_id')->autoIncrement();
            $table->foreignId('products_id');
            $table->string('platform')->nullable();
            $table->string('front_camera')->nullable();
            $table->string('main_camera')->nullable();
            $table->string('display')->nullable();
            $table->string('battery')->nullable();
            $table->string('ram')->nullable();
            $table->string('storage')->nullable();
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
        Schema::dropIfExists('features');
    }
};
