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
        Schema::create('lkpd_commentars', function (Blueprint $table) {
            $table->id();
            $table->text('commentar_contents');
            $table->foreignId('user_id')->constrained('users')->onDelete('cascade');
            $table->foreignId('lkpd_id')->constrained('module_lkpds')->onDelete('cascade');
            $table->unsignedBigInteger('parent_commentar')->nullable();
            
            $table->foreign('parent_commentar')
                ->references('id')
                ->on('lkpd_commentars')
                ->onDelete('cascade');
            
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('lkpd_comentars');
    }
};
