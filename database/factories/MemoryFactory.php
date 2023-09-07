<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\User;
use App\Models\Post;

class MemoryFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'post_id' => Post::factory(),
            'user_id' => User::factory(),
            'file_path' => $this->faker->filePath(),
            'caption' => $this->faker->sentence(),
            'entry' => $this->faker->paragraph(),
        ];
    }
}
