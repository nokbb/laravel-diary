<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMemoryCategoriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if (!Schema::hasTable('memory_categories')) {
            Schema::create('memory_categories', function (Blueprint $table) {
                $table->id();
                $table->unsignedBigInteger('memory_id');
                $table->unsignedBigInteger('category_id');
    
                $table->foreign('memory_id')->references('id')->on('memories');
                $table->foreign('category_id')->references('id')->on('categories');
    
                $table->unique(['memory_id', 'category_id']);
            });
        }
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('memory_categories');
    }
}
