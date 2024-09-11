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
            $table->id();
            $table->integer('event_id');
            $table->string('name', 150);
            $table->string('email');
            $table->string('phone',50);
            $table->text('massage');
            $table->integer('num_people');
            $table->integer('status')->default(0)->comment('1=>booked,0=>not booked');
            $table->tinyInteger('is_deleted')->default(0)->comment('1=>delete,0=>not delete');
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
