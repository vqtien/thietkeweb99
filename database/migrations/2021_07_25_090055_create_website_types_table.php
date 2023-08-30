<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateWebsiteTypesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('website_types', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('class_icon')->nullable();
            $table->integer('photo_id')->nullable();
            $table->string('description')->nullable();
            $table->integer('sorted')->default(1);
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
        Schema::dropIfExists('website_types');
    }
}
