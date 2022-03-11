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
        Schema::create('videos', function (Blueprint $table) {
            $table->id();
            $table->string('judul',100);
            $table->string('gambar',100);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @returnphp void
     */
    public function down()
    {
        Schema::dropIfExists('videos');
    }
};
