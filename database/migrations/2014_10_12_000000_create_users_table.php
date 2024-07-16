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
// في ملف المهاجرة
Schema::create('users', function (Blueprint $table) {
    $table->id();
    $table->string('name');
    $table->string('username')->unique();
    $table->string('email');
    $table->string('password');
    $table->string('phone');
    $table->enum('gender', ['male', 'female']);
    $table->enum('user_type', ['admin', 'user']);
    $table->enum('status', ['active', 'inactive'])->default('active');
    $table->date('last_login_on')->nullable();
    $table->integer('login_try_attempts')->default(0);
    $table->date('login_try_attempt_date')->nullable();
    $table->timestamps();
    $table->softDeletes();
});

    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
    }
};
