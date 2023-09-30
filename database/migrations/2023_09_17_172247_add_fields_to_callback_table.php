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
        Schema::table('callbacks', function (Blueprint $table) {
            $table->string('property_name');
            $table->string('location');
            $table->float('price')->default(0);
            $table->string('hotel_type');
            $table->string('checkin');
            $table->string('checkout');
            $table->string('amentities');
            $table->string('menus');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('callbacks', function (Blueprint $table) {
            //
        });
    }
};
