<?php

namespace Database\Factories;

use App\Models\Employee;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class EmployeeFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Employee::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'employee_code' => rand(100000,9999999),   
            'firstname' => $this->faker->firstName,
            'surname' => $this->faker->lastName, 
            'cellphone'=>$this->faker->phoneNumber,
            'job_title'=>$this->faker->jobTitle,
            'user_id' => mt_rand(1,20), 
            'branch_id' => mt_rand(1,5), 

        ];
    }
}
