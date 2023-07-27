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
        Schema::create('order_stores', function (Blueprint $table) {
            $table->foreignIdFor(\App\Models\Store::class)->references('id')->on('stores');
            $table->foreignIdFor(\App\Models\UserOrder::class)->references('id')->on('user_orders');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('order_stores');
    }
};
