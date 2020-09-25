<?php

namespace Database\Factories;

use App\Models\CompanyBankDetail;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class CompanyBankDetailFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = CompanyBankDetail::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'bank_id' => mt_rand(1,4),
            'branch_id' => mt_rand(1,5),
            'account_holder_name' => $this->faker->company,
            'account_number' => mt_rand(100000,999999), 
            'branch_code' => mt_rand(10000,99999), 
        ];
    }
}
