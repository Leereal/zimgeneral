<?php

namespace Database\Seeders;

use App\Models\Plan;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PlanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::statement('SET FOREIGN_KEY_CHECKS=0;');
        Plan::truncate();
        DB::statement('SET FOREIGN_KEY_CHECKS=1;');
        
        Plan::create(['name'=>'General','pre'=>'ZGE1-']);        
        Plan::create(['name'=>'Silver','pre'=>'ZGS1-']);
        Plan::create(['name'=>'Gold','pre'=>'ZGG1-']);        
        Plan::create(['name'=>'Platinum','pre'=>'ZGP1-']);
        Plan::create(['name'=>'Executive Platinum Plus','pre'=>'ZGEP1-']);
        Plan::create(['name'=>'Flexi 6 Gold','pre'=>'ZFG1-']);
        Plan::create(['name'=>'Flexi 6 Platinum','pre'=>'ZFP1-']);
        Plan::create(['name'=>'Footballers Shield Plan A','pre'=>'ZFA1-']);
        Plan::create(['name'=>'Footballers Shield Plan B','pre'=>'ZFB1-']);
        Plan::create(['name'=>'Senior Citizen','pre'=>'ZSC1-']);
        Plan::create(['name'=>'Senior Citizen Diamond','pre'=>'ZSD1-']);
    }
}
