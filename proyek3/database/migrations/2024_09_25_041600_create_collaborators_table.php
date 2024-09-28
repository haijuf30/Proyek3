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
        Schema::create('collaborators', function (Blueprint $table) {
            $table->id();
            $table->string('collaborator_name');
            $table->string('profile_image')->nullable();
            $table->text('about_me')->nullable();
            $table->string('npsn', 8);

            $table->foreign('npsn')
                ->references('npsn')
                ->on('schools')
                ->onDelete('cascade')
                ->onUpdate('cascade');    

            $table->foreignId('user_id')
                ->constrained('users')
                ->unique()
                ->onDelete('cascade');        

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('colaborators');
    }
};
