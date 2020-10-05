<?php

namespace Database\Seeders;

use App\Models\Limit;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class LimitSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::statement('SET FOREIGN_KEY_CHECKS=0;');
        Limit::truncate();
        DB::statement('SET FOREIGN_KEY_CHECKS=1;');
        
        Limit::create(['name'=>'Global Limit']);
        Limit::create(['name'=>'Hospitalization']);
        Limit::create(['name'=>'Ward Admission']);
        Limit::create(['name'=>'GP Consultations']);
        Limit::create(['name'=>'Specialists Consultations']);
        Limit::create(['name'=>'Drugs']);
        Limit::create(['name'=>'Dental']);
        Limit::create(['name'=>'Optical']);
        Limit::create(['name'=>'Oncology']);
        Limit::create(['name'=>'Dialysis']);        
        Limit::create(['name'=>'Pathology']); 
        Limit::create(['name'=>'Radiology']); 
        Limit::create(['name'=>'Maternity']); 
    }
}
