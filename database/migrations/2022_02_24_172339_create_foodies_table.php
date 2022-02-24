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
        Schema::create('foodies', function (Blueprint $table) {
            $table->string('username')->primary();
            $table->string('cover_image')->nullable();
            $table->string('profile_picture')->nullable();
            $table->string('fName')->nullable();
            $table->string('lName')->nullable();
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
        Schema::dropIfExists('foodies');
    }
};
