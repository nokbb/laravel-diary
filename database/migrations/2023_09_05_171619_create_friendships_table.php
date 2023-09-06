<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFriendshipsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if (!Schema::hasTable('friendships'))  {
            Schema::create('friendships', function (Blueprint $table) {
                $table->id();
                $table->unsignedBigInteger('user_id');
                $table->unsignedBigInteger('friend_id');
                $table->enum('status', ['pending', 'accepted', 'declined'])->default('pending');
                $table->timestamps();
    
                $table->foreign('user_id')->references('id')->on('users');
                $table->foreign('friend_id')->references('id')->on('users');
    
                $table->unique(['user_id', 'friend_id']);
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
        Schema::dropIfExists('friendships');
    }
}
