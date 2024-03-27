<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{

    public function up(): void
    {
        Schema::create('produks', function (Blueprint $table) {
            $table->integer('produk_id')->autoIncrement();
            $table->tinyInteger('produk_id_kat');
            $table->integer('produk_id_user');
            $table->string('produk_code', 50);
            $table->string('produk_nama', 255);
            $table->double('produk_hrg');
            $table->text('produk_keterangan');
            $table->integer('produk_stock');
            $table->string('produk_photo', 100);
            $table->timestamps();
        });

        Schema::table('produks', function (Blueprint $table) {
            $table->foreign('produk_id_user')->references('user_id')->on('users')->cascadeOnDelete()->cascadeOnUpdate();
            $table->foreign('produk_id_kat')->references('kat_id')->on('kategoris')->cascadeOnDelete()->cascadeOnUpdate();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('produks');
    }
};
