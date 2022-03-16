<?php

namespace Database\Factories;

use App\Models\Oder;
use App\Models\Product;
use Illuminate\Database\Eloquent\Factories\Factory;

class OderDetailFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'oder_id'=>Oder::all()->random()->id,
            'product_id'=>Product::all()->random()->id,
            'price'=>rand(100,100000),
            'quantity'=>rand(100,100000)
        ];
    }
}
