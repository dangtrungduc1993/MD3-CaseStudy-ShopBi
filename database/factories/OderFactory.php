<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

class OderFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name'=>$this->faker->name(),
            'date_oder'=>$this->faker->date(),
            'total'=>rand(10,1000),
            'payment'=>rand(10,1000),
            'note'=>$this->faker->text(),
            'user_id'=>User::all()->random()->id
        ];
    }
}
