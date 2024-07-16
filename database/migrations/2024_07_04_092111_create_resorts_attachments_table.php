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
Schema::create('resorts_attachments', function (Blueprint $table) {
    $table->id();
    $table->unsignedBigInteger('resort_id');
    $table->string('path');
    $table->enum('status', ['active', 'inactive'])->default('active');
    $table->timestamps();
    $table->softDeletes();
    $table->foreign('resort_id')->references('id')->on('resorts');
});

    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('resorts_attachments');
    }
};
