<?php

namespace Database\Factories;

use App\Models\ClientBankDetail;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class ClientBankDetailFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = ClientBankDetail::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'bank_id' => mt_rand(1,4),
            'client_id' => mt_rand(1,50),
            'account_holder_name' => $this->faker->firstName,
            'account_number' => mt_rand(100000,999999), 
            'branch_code' => mt_rand(10000,99999), 
        ];
    }
}
