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
        Schema::create('orders', function (Blueprint $table) {
            $table->integer('order_id')->autoIncrement();
            $table->integer('order_id_user');
            $table->date('order_tgl')->nullable();
            $table->string('order_code', 50);
            $table->double('order_ttl');
            $table->text('order_kurir');
            $table->integer('order_ongkir');
            $table->date('order_byr_deadline')->nullable();
            $table->tinyInteger('order_batal');
            $table->timestamps();
        });

        Schema::table('orders', function (Blueprint $table) {

            $table->foreign('order_id_user')->references('user_id')->on('users')->cascadeOnDelete()->cascadeOnUpdate();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('orders');
    }
};
