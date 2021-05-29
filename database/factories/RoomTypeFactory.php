<?php

namespace Database\Factories;

use App\Models\RoomType;
use Illuminate\Database\Eloquent\Factories\Factory;

class RoomTypeFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = RoomType::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition(): array
    {
        return [
            "name" => $this->faker->name,
            "description" => $this->faker->text,
            "photos" => [$this->faker->imageUrl(),$this->faker->imageUrl(),$this->faker->imageUrl()],
            "price_per_night" => $this->faker->numberBetween(5, 1000)*1000,
        ];
    }
}
