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
        Schema::create('portofolios', function (Blueprint $table) {
            $table->id();
            $table->string('judul_portofolio');
            $table->string('slug')->unique();
            $table->text('detail_portofolio');
            $table->string('image');
            $table->timestamps();

            //foreign key user_frelance
            $table->foreignId('frelance_id')->references('frelance_id')->on('user_frelancers')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('portofolios');
    }
};
