<?php

namespace Database\Factories;

use App\Models\Client;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class ClientFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Client::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'date_joined'=> now()->subMinutes(55),    
            'medical_aid_number' => rand(100000,9999999),
            'id_number' => rand(100000,9999999), 
            'title'=>'Mr',
            'firstname' => $this->faker->firstName,
            'surname' => $this->faker->lastName,   
            'date_of_birth'=> now()->subDays(5000),
            'address'=>$this->faker->address,   
            'gender' => $this->faker->randomElement(['male', 'female']),  
            'business_telephone'=>$this->faker->phoneNumber,
            'home_telephone'=>$this->faker->phoneNumber, 
            'cellphone'=>$this->faker->phoneNumber,
            'email' => $this->faker->unique()->safeEmail,
            'type' => $this->faker->randomElement(['Principal', 'Dependent']), 
            'membership_status'=>1,
            'card_status'=>1,   
            'branch_id' => mt_rand(1,5), 
            'user_id' => mt_rand(1,20), 
            'plan_id' => mt_rand(1,8),
            'referrer_id' => mt_rand(1,15), 
            'created_by' => mt_rand(1,15), 
            'group_id' => mt_rand(1,20), 
            'created_at'=>now()->subDays(rand(5,210))    
        ];
    }
}
