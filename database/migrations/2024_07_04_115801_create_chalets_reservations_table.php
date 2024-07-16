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
        Schema::create('chalets_reservations', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('guest_id');
            $table->unsignedBigInteger('chalet_id');
            $table->date('from');
            $table->date('to');
            $table->enum('status', ['active', 'inactive'])->default('active');
            $table->timestamps();
            $table->softDeletes();
            $table->foreign('guest_id')->references('id')->on('guests')->onDelete('cascade');
            $table->foreign('chalet_id')->references('id')->on('chalets')->onDelete('cascade');
        });
    }


    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('chalets_reservations');
    }
};
