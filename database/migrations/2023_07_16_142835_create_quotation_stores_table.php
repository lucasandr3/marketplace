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
        Schema::create('quotation_stores', function (Blueprint $table) {
            $table->foreignIdFor(\App\Models\Store::class)->references('id')->on('stores');
            $table->foreignIdFor(\App\Models\UserQuotation::class)->references('id')->on('user_quotations');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('quotation_stores');
    }
};
