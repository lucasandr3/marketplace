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
        Schema::create('supply', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(\App\Models\Product::class)->references('id')->on('products');
            $table->string('name');
            $table->string('document');
            $table->string('city');
            $table->text('location');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('supply');
    }
};
