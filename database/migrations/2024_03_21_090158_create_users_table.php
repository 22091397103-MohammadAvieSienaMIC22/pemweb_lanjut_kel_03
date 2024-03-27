<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{

    public function up(): void
    {
        Schema::create('users', function (Blueprint $table) {
            $table->integer('user_id')->autoIncrement();
            $table->string('user_email', 100)->unique();
            $table->string('user_password', 32);
            $table->string('user_nama', 100);
            $table->text('user_alamat');
            $table->string('user_hp', 25);
            $table->string('user_pos', 15);
            $table->tinyInteger('user_role');
            $table->tinyInteger('user_aktif');
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('users');
    }
};
