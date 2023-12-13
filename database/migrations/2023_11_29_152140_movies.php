<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        if (!Schema::hasTable('movies')) {
            Schema::create('movies', function (Blueprint $table) {
                $table->id();
                $table->string('image');
                $table->string('movieTitle');
                $table->text('movieDesc');
                $table->integer('overall');
                $table->integer('genre_Id');

                // Foreign key
                $table->foreign('genre_id')->references('id')->on('genres');
                $table->timestamps(); 
            });
        }    
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('movies');
    }
};
