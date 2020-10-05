<?php

namespace Database\Seeders;

use App\Models\PaymentMethod;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PaymentMethodSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::statement('SET FOREIGN_KEY_CHECKS=0;');
        PaymentMethod::truncate();
        DB::statement('SET FOREIGN_KEY_CHECKS=1;');
        
         $cash = PaymentMethod::create([
        	'name'=>'Cash'    	        	
        ]); 

         $bank = PaymentMethod::create([
            'name'=>'Bank'                  
        ]); 

         $swip = PaymentMethod::create([
            'name'=>'Swip'                  
        ]);  

         $Ecocash = PaymentMethod::create([
            'name'=>'Ecocash'                  
        ]);    
    }
}
