<?php

namespace Database\Factories;

use App\Models\Examples;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class ExamplesFactory extends Factory
{
    protected $model= Examples::class;
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'name'=>fake()->name(),
            'firstname'=>fake()->firstName(),
            'lastname'=>fake()->lastName()
        ];
    }
}
