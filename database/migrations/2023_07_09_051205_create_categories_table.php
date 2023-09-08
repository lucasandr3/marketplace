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
        Schema::create('categories', function (Blueprint $table) {
            $table->id();
            $table->string('name_category');
            $table->string('slug');
            $table->timestamps();
        });

        Schema::create('departments', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(\App\Models\Category::class)->references('id')->on('categories');
            $table->string('name_department');
            $table->string('slug');
            $table->timestamps();
        });

        Schema::create('sub_divisions', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(\App\Models\Department::class)->references('id')->on('departments');
            $table->foreignIdFor(\App\Models\Category::class)->references('id')->on('categories');
            $table->string('name_division');
            $table->string('slug');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('sub_divisions');
        Schema::dropIfExists('departments');
        Schema::dropIfExists('categories');
    }
};
