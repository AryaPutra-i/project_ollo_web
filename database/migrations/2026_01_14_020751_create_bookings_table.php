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
        Schema::create('bookings', function (Blueprint $table) {
            $table->id('booking_id');
            $table->string('name_customer');
            $table->bigInteger('phone_customer');
            $table->string('judul_booking');
            $table->string('detail');
            $table->double('harga');
            $table->date('dateline');
            $table->string('referensi_file')->nullable();
            $table->string('referensi_link')->nullable();
            $table->foreignId('frelane_id')->references('frelance_id')->on('user_frelancers')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('bookings');
    }
};
