<?php

namespace Database\Factories;

use App\Models\Shop;
use App\Models\Type;
use Illuminate\Database\Eloquent\Factories\Factory;

class ProductFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name'=>$this->faker->name,
            'description'=>$this->faker->text,
            'price'=>rand(100,1000),
            'quantity'=>rand(1,100),
            'image'=>$this->faker->text,
            'type_id'=>Type::all()->random()->id,
            'shop_id'=>Shop::all()->random()->id
        ];

    }
}
