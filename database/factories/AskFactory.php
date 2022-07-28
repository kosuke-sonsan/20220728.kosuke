<?php

namespace Database\Factories;

use App\Models\Ask;
use Illuminate\Database\Eloquent\Factories\Factory;

class AskFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    protected $model = Ask::class;
    
    public function definition()
    {
        return [
            'fullname' => $this->faker->name(),
            'sex' => rand(1,2),
            'email' => $this->faker->email(),
            'postcode' => $this->faker->postcode(),
            'address' => $this->faker->address(),
            'building_name' => $this->faker->building_name(),
            'opinion' => $this->faker->realtext($maxNbChars = 120, $indexsize = 2),
        ];
    }
}
