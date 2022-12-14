<?php

use App\Containers\MarketPalace\Address\Enums\GenderProxy;
use App\Containers\MarketPalace\Address\Enums\NameOrderProxy;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('persons', function (Blueprint $table) {
            $table->increments('id');
            $table->string('firstname')->comment('First name');
            $table->string('lastname')->comment('Last Name');
            $table->string('email')->nullable();
            $table->string('phone', 22)->nullable();
            $table->date('birthdate')->nullable();
            $table->enum('gender', GenderProxy::values())->nullable();
            $table->string('nin', 21)->nullable()->comment('National Identification Number');

            $table->enum('nameorder', NameOrderProxy::values())
                ->default(NameOrderProxy::defaultValue())
                ->comment('western: First Last, eastern: Last First');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('persons');
    }
};
