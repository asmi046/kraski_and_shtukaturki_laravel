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
        Schema::create('color_effects', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string("name", 200);
            $table->integer("order");
            $table->string("slug", 200);
            $table->string("img", 500)->nullable();
            $table->text('description')->nullable();

            $table->string('seo_title')->nullable();
            $table->text('seo_description')->nullable();
        });

        Schema::create('color_effect_product_group', function (Blueprint $table) {
            $table->id();
            $table->foreignId('color_effect_id')->constrained()->cascadeOnDelete()->cascadeOnUpdate();
            $table->foreignId('product_group_id')->constrained()->cascadeOnDelete()->cascadeOnUpdate();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('color_effect_product_group');
        Schema::dropIfExists('color_effects');
    }
};
