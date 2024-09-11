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
        Schema::create('events', function (Blueprint $table) {
            $table->id();
            $table->integer('category_id');
            $table->integer('location_id');
            $table->integer('address_id');
            $table->string('name',150);
            $table->text('description');
            $table->date('date');
            $table->time('time');
            $table->tinyInteger('status')->default(0)->comment('1=>active,0=>not active');
            $table->tinyInteger('is_deleted')->default(0)->comment('1=>delete,0=>not delete');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('events');
    }
};
