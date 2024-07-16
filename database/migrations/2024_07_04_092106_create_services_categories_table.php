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
Schema::create('services_categories', function (Blueprint $table) {
    $table->id();
    $table->unsignedBigInteger('service_id');
    $table->unsignedBigInteger('category_id');
    $table->enum('status', ['active', 'inactive'])->default('active');
    $table->timestamps();
    $table->softDeletes();
    $table->foreign('service_id')->references('id')->on('services');
    $table->foreign('category_id')->references('id')->on('categories')->onDelete('cascade');
});

    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('services_categories');
    }
};
