<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('order_details', function (Blueprint $table) {
            $table->integer('detail_id_order');
            $table->integer('detail_id_produk');
            $table->double('detail_harga');
            $table->integer('detail_jml');
            $table->timestamps();
        });

        Schema::table('order_details', function (Blueprint $table) {

            $table->foreign('detail_id_order')->references('order_id')->on('orders')->cascadeOnDelete()->cascadeOnUpdate();
            $table->foreign('detail_id_produk')->references('produk_id')->on('produks')->cascadeOnDelete()->cascadeOnUpdate();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('order_details');
    }
};
