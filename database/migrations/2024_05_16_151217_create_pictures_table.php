<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
{
    Schema::create('pictures', function (Blueprint $table) {
        $table->id();
        $table->string('name');
        $table->unsignedBigInteger('album_id');
        $table->timestamps();

        $table->foreign('album_id')->references('id')->on('albums')->onDelete('cascade');
    });
}


    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pictures');
    }
};
