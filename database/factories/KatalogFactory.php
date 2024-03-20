<?php

namespace Database\Factories;

use App\Models\Katalog;
use Illuminate\Database\Eloquent\Factories\Factory;

class KatalogFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Katalog::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'image' => $this->faker->imageUrl(),
            'name_product' => $this->faker->words(3, true),
            'description' => $this->faker->paragraph,
            'price' => $this->faker->numberBetween(10, 1000),
            'video' => $this->faker->url,
            'id_category' => $this->faker->numberBetween(1, 3),
        ];
    }
}
