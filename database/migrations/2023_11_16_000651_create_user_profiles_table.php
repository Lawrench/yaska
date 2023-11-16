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
        Schema::create('user_profiles', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id');
            $table->text('about')->nullable();
            $table->string('location')->nullable();
            $table->text('current_publications')->nullable();
            $table->string('writing_experience')->nullable();
            $table->string('awards_achievements')->nullable();
            $table->string('writing_goals')->nullable();
            $table->string('favorite_authors_books')->nullable();
            $table->string('genres_written')->nullable();
            $table->string('education_training')->nullable();
            $table->string('interests_hobbies')->nullable();
            $table->string('areas_of_expertise')->nullable();
            $table->timestamps();

            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('user_profiles');
    }
};
