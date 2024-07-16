<?php

use Illuminate\Support\Facades\DB;
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
        Schema::create('categories', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->text('description');
            $table->integer('rooms_count');
            $table->integer('bathroom_count');
            $table->float('price');
            $table->integer('capacity');
            $table->unsignedBigInteger('resort_id');
            $table->enum('status', ['active', 'inactive'])->default('active');
            $table->timestamps();
            $table->softDeletes();
            $table->foreign('resort_id')->references('id')->on('resorts')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        // حذف السجلات المرتبطة أولاً
        DB::table('categories_attach')->delete();
        DB::table('services_categories')->delete();

        Schema::dropIfExists('categories_attach');
        Schema::dropIfExists('services_categories');
        Schema::dropIfExists('categories');
    }
};
