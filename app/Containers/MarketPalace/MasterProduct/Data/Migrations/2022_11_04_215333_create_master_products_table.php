<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('master_products', function (Blueprint $table) {
            $table->id();

            $table->string('name');
            $table->string('slug')->nullable();

            $table->decimal('price', 15, 4)->nullable();
            $table->decimal('original_price', 15, 4)->nullable();

            $table->text('excerpt')->nullable();
            $table->text('description')->nullable();
            $table->string('state')->default('draft');// See ProductState

            $table->decimal('weight', 15, 4)->nullable();
            $table->decimal('height', 15, 4)->nullable();
            $table->decimal('width', 15, 4)->nullable();
            $table->decimal('length', 15, 4)->nullable();

            $table->string('ext_title', 511)->nullable();
            $table->text('meta_keywords')->nullable();
            $table->text('meta_description')->nullable();

            $table->softDeletes();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('master_products');
    }
};
