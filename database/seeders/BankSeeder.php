<?php

namespace Database\Seeders;

use App\Models\Bank;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BankSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::statement('SET FOREIGN_KEY_CHECKS=0;');
        Bank::truncate();
        DB::statement('SET FOREIGN_KEY_CHECKS=1;');
        

        $barclays = Bank::create([
            'name'=>'Barclays',  
            'avatar'=>'africa_bank.png'       	    	        	
        ]);

        $cabs = Bank::create([
            'name'=>'Cabs',
            'avatar'=>'africa_bank.png'               	        	
        ]);

        $fbc = Bank::create([
            'name'=>'FBC', 
            'avatar'=>'africa_bank.png'        	     	        	
        ]);

        $cbz = Bank::create([
            'name'=>'CBZ', 
            'avatar'=>'africa_bank.png'       	      	        	
        ]);       
    }
}
