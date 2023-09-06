<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\User::factory(2)->create();
        \App\Models\Post::factory(2)->create();
        \App\Models\Memory::factory(2)->create();
        \App\Models\Like::factory(2)->create();
        \App\Models\Friendship::factory(2)->create();
        \App\Models\Category::factory(2)->create();
        \App\Models\Memory_category::factory(2)->create();
        \App\Models\Password_reset::factory(2)->create();
        \App\Models\Category_privacy_setting::factory(2)->create();
    }
}
