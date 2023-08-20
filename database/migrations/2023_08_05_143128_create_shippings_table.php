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
        Schema::create('shippings', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(\App\Models\Store::class)->references('id')->on('stores');
            $table->string('shipping_name');
            $table->string('shipping_code_contract')->nullable();
            $table->string('shipping_pass_contract')->nullable();
            $table->string('shipping_zipcode');
            $table->double('shipping_tax', 10, 2)->nullable();
            $table->boolean('shipping_active')->default(1);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('shippings');
    }
};
