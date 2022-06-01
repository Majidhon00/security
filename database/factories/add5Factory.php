<?php

namespace Database\Factories;

use App\Models\add5;
use Illuminate\Database\Eloquent\Factories\Factory;

class add5Factory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     * 
     * @var string
     */ 
     protected $model = add5::class;
   
     /**
     * Define the model's default state.
     *
     * @return array
     */

    public function definition()
    {
        return [
            'title'=>$this->faker->name,
            'icin'=>$this->faker->name,
            'content'=>$this->faker->address
        ];
    }
}
