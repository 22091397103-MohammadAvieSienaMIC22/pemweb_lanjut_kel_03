<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{

    public function up(): void
    {
        Schema::create('keranjangs', function (Blueprint $table) {
            $table->integer('ker_id')->autoIncrement();
            $table->integer('ker_id_user');
            $table->integer('ker_id_produk');
            $table->double('ker_harga');
            $table->integer('ker_jml');
            $table->timestamps();
        });

        Schema::table('keranjangs', function (Blueprint $table) {

            $table->foreign('ker_id_user')->references('user_id')->on('users')->cascadeOnDelete()->cascadeOnUpdate();
            $table->foreign('ker_id_produk')->references('produk_id')->on('produks')->cascadeOnDelete()->cascadeOnUpdate();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('keranjangs');
    }
};
