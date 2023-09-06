<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Memory;
use App\Models\Category;

class Memory_categoryFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'memory_id' => Memory::factory(),
            'category_id' => Category::factory(),
        ];
    }
}
