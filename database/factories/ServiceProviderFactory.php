<?php

namespace Database\Factories;

use App\Models\ServiceProvider;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class ServiceProviderFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = ServiceProvider::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'user_id' => mt_rand(1,20),
            'name' => $this->faker->firstName,
            'ahfoz_number' => rand(100000,9999999),      
            'contact_person' => $this->faker->name,
            'address' => $this->faker->address,           
            'email' => $this->faker->unique()->safeEmail,
            'cellphone'=>$this->faker->phoneNumber,
            'phone'=>$this->faker->phoneNumber,
        ];
    }
}
