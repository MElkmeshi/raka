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
Schema::create('resorts', function (Blueprint $table) {
    $table->id();
    $table->unsignedBigInteger('user_id');
    $table->unsignedBigInteger('municipality_id');
    $table->string('name');
    $table->string('phone');
    $table->string('email');
    $table->string('website')->nullable();
    $table->string('locations_link')->nullable();
    $table->text('address');
    $table->text('description');
    $table->string('image')->nullable();
    $table->float('rating')->default(0);
    $table->time('check_in_time');
    $table->time('check_out_time');
    $table->integer('number_of_chalets')->default(0);
    $table->enum('status', ['active', 'inactive'])->default('active');
    $table->timestamps();
    $table->softDeletes();
    $table->foreign('user_id')->references('id')->on('users');
    $table->foreign('municipality_id')->references('id')->on('municipalities');
});

    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('resorts');
    }
};
