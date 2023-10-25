<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('product_group_prices', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->foreignId('product_group_id')->constrained()
                                        ->onUpdate('cascade')
                                        ->onDelete('cascade');

            $table->string('ed_izm', 20)->nullable();
            $table->double('volume', 10, 2)->default(0);
            $table->double('price', 10, 2);
            $table->double('old_price', 10, 2)->default(0);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('product_group_prices');
    }
};
