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
        Schema::table('projects', function (Blueprint $table) {
            $table->string('slug')->comment('Окончание ссылки');
            $table->json('galery')->comment('Галерея проекта');
            $table->json('params')->comment('Параметры проекта');

            $table->string('seo_title')->nullable();
            $table->text('seo_description')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('projects', function (Blueprint $table) {
            $table->dropColumn('slug');
            $table->dropColumn('galery');
            $table->dropColumn('params');
            $table->dropColumn('seo_title');
            $table->dropColumn('seo_description');
        });
    }
};
