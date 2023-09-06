<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCategoryPrivacySettingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if (!Schema::hasTable('category_privacy_settings'))  {
            Schema::create('category_privacy_settings', function (Blueprint $table) {
                $table->id();
                $table->unsignedBigInteger('category_id');
                $table->unsignedBigInteger('user_id');
                $table->enum('privacy_setting', ['public', 'private', 'friends_only']);
                $table->timestamps();
    
                $table->foreign('category_id')->references('id')->on('categories');
                $table->foreign('user_id')->references('id')->on('users');
    
                $table->unique(['category_id', 'user_id']);
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
        Schema::dropIfExists('category_privacy_settings');
    }
}
