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
        Schema::create('blogs', function (Blueprint $table) {
            $table->id();
            $table->string("title");
            $table->string("author");
            $table->string('image')->nullable();
            $table->string("slug")->unique();
            $table->text("description");
            $table->text("body");
            $table->timestamp('time')->useCurrent();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('blogs');
    }
};
