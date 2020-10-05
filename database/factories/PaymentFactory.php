<?php

namespace Database\Factories;

use App\Models\Payment;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class PaymentFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Payment::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'amount' => $this->faker->numberBetween($min = 10, $max = 900),
            'description' => "Payment",
            'receipt_number' => rand(100000,9999999),
            'ref_number' => rand(100000,9999999),  
            'date_paid'=> $this->faker->dateTimeBetween(1420070400 ,'now'),
            'month_paid_for'=> $this->faker->monthName(1420070400,'now')."-".$this->faker->year(1420070400,'now'),    
            'client_id' => mt_rand(1,20), 
            'ipaddress'=>$this->faker->ipv4,       
            'branch_id' => mt_rand(1,5), 
            'employee_id' => mt_rand(1,5), 
            'plan_id' => mt_rand(1,5),      
            'payment_method_id' => mt_rand(1,4),
            'created_at'=>now()->subDays(rand(5,210)) 
        ];
    }
}
