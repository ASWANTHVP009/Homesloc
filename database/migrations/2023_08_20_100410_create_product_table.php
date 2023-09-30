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
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('description');
            $table->float('price');
            $table->float('special_price')->default(0);
            $table->string('location');
            $table->string('geolocation');
            $table->string('quote');
            $table->string('hotel_type');
            $table->string('checkin');
            $table->string('checkout');
            $table->string('amentities');
            $table->string('menus');
            $table->string('hotel_policy');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('product');
    }
};
