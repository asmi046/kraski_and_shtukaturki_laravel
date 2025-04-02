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
        Schema::create('brands', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('title')->nullable()->comment('Заголовок страницы бренда');
            $table->string('name')->comment('Имя бренда');
            $table->string('order')->default(0)->comment('Позиция');
            $table->string('slug')->unique()->comment('Ссылка');
            $table->string('img')->nullable()->comment('Лого бренда');
            $table->text('description')->nullable()->comment('Описание бренда');

            $table->string('seo_title')->nullable();
            $table->text('seo_description')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('brands');
    }
};
