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
        Schema::create('product_groups', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('sku')->unique();
            $table->string('title');
            $table->string('slug');
            $table->string('img')->nullable();
            $table->text('description')->nullable();
            $table->json('advantages')->nullable();
            $table->json('props')->nullable();

            $table->boolean("popular")->nullable();

            $table->text('short_description')->nullable();
            $table->string('tm', 50)->nullable();

            $table->string('seo_title')->nullable();
            $table->text('seo_description')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('product_groups');
    }
};
