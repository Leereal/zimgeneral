<?php

namespace Database\Seeders;

use App\Models\LimitPlan;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class LimitPlanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::statement('SET FOREIGN_KEY_CHECKS=0;');
        LimitPlan::truncate();
        DB::statement('SET FOREIGN_KEY_CHECKS=1;');
        
        LimitPlan::create(['plan_id'=>'1','limit_id'=>'1','amount_yearly'=>'12000','amount_monthly'=>'1000']);
        LimitPlan::create(['plan_id'=>'1','limit_id'=>'2','amount_yearly'=>'12000','amount_monthly'=>'1000']);
        LimitPlan::create(['plan_id'=>'1','limit_id'=>'3','amount_yearly'=>'12000','amount_monthly'=>'1000']);
        LimitPlan::create(['plan_id'=>'1','limit_id'=>'4','amount_yearly'=>'12000','amount_monthly'=>'1000']);
        LimitPlan::create(['plan_id'=>'1','limit_id'=>'5','amount_yearly'=>'12000','amount_monthly'=>'1000']);
        LimitPlan::create(['plan_id'=>'1','limit_id'=>'6','amount_yearly'=>'12000','amount_monthly'=>'1000']);
        LimitPlan::create(['plan_id'=>'1','limit_id'=>'7','amount_yearly'=>'12000','amount_monthly'=>'1000']);
        LimitPlan::create(['plan_id'=>'1','limit_id'=>'8','amount_yearly'=>'12000','amount_monthly'=>'1000']);
        LimitPlan::create(['plan_id'=>'1','limit_id'=>'9','amount_yearly'=>'12000','amount_monthly'=>'1000']);
        LimitPlan::create(['plan_id'=>'1','limit_id'=>'10','amount_yearly'=>'12000','amount_monthly'=>'1000']);
        LimitPlan::create(['plan_id'=>'1','limit_id'=>'11','amount_yearly'=>'12000','amount_monthly'=>'1000']);
        LimitPlan::create(['plan_id'=>'1','limit_id'=>'12','amount_yearly'=>'12000','amount_monthly'=>'1000']);
        LimitPlan::create(['plan_id'=>'1','limit_id'=>'13','amount_yearly'=>'12000','amount_monthly'=>'1000']);

        LimitPlan::create(['plan_id'=>'2','limit_id'=>'1','amount_yearly'=>'12000','amount_monthly'=>'1000']);
        LimitPlan::create(['plan_id'=>'2','limit_id'=>'2','amount_yearly'=>'12000','amount_monthly'=>'1000']);
        LimitPlan::create(['plan_id'=>'2','limit_id'=>'3','amount_yearly'=>'12000','amount_monthly'=>'1000']);
        LimitPlan::create(['plan_id'=>'2','limit_id'=>'4','amount_yearly'=>'12000','amount_monthly'=>'1000']);
        LimitPlan::create(['plan_id'=>'2','limit_id'=>'5','amount_yearly'=>'12000','amount_monthly'=>'1000']);
        LimitPlan::create(['plan_id'=>'2','limit_id'=>'6','amount_yearly'=>'12000','amount_monthly'=>'1000']);
        LimitPlan::create(['plan_id'=>'2','limit_id'=>'7','amount_yearly'=>'12000','amount_monthly'=>'1000']);
        LimitPlan::create(['plan_id'=>'2','limit_id'=>'8','amount_yearly'=>'12000','amount_monthly'=>'1000']);
        LimitPlan::create(['plan_id'=>'2','limit_id'=>'9','amount_yearly'=>'12000','amount_monthly'=>'1000']);
        LimitPlan::create(['plan_id'=>'2','limit_id'=>'10','amount_yearly'=>'12000','amount_monthly'=>'1000']);
        LimitPlan::create(['plan_id'=>'2','limit_id'=>'11','amount_yearly'=>'12000','amount_monthly'=>'1000']);
        LimitPlan::create(['plan_id'=>'2','limit_id'=>'12','amount_yearly'=>'12000','amount_monthly'=>'1000']);
        LimitPlan::create(['plan_id'=>'2','limit_id'=>'13','amount_yearly'=>'12000','amount_monthly'=>'1000']);

        LimitPlan::create(['plan_id'=>'3','limit_id'=>'1','amount_yearly'=>'12000','amount_monthly'=>'1000']);
        LimitPlan::create(['plan_id'=>'3','limit_id'=>'2','amount_yearly'=>'12000','amount_monthly'=>'1000']);
        LimitPlan::create(['plan_id'=>'3','limit_id'=>'3','amount_yearly'=>'12000','amount_monthly'=>'1000']);
        LimitPlan::create(['plan_id'=>'3','limit_id'=>'4','amount_yearly'=>'12000','amount_monthly'=>'1000']);
        LimitPlan::create(['plan_id'=>'3','limit_id'=>'5','amount_yearly'=>'12000','amount_monthly'=>'1000']);
        LimitPlan::create(['plan_id'=>'3','limit_id'=>'6','amount_yearly'=>'12000','amount_monthly'=>'1000']);
        LimitPlan::create(['plan_id'=>'3','limit_id'=>'7','amount_yearly'=>'12000','amount_monthly'=>'1000']);
        LimitPlan::create(['plan_id'=>'3','limit_id'=>'8','amount_yearly'=>'12000','amount_monthly'=>'1000']);
        LimitPlan::create(['plan_id'=>'3','limit_id'=>'9','amount_yearly'=>'12000','amount_monthly'=>'1000']);
        LimitPlan::create(['plan_id'=>'3','limit_id'=>'10','amount_yearly'=>'12000','amount_monthly'=>'1000']);
        LimitPlan::create(['plan_id'=>'3','limit_id'=>'11','amount_yearly'=>'12000','amount_monthly'=>'1000']);
        LimitPlan::create(['plan_id'=>'3','limit_id'=>'12','amount_yearly'=>'12000','amount_monthly'=>'1000']);
        LimitPlan::create(['plan_id'=>'3','limit_id'=>'13','amount_yearly'=>'12000','amount_monthly'=>'1000']);

        LimitPlan::create(['plan_id'=>'4','limit_id'=>'1','amount_yearly'=>'12000','amount_monthly'=>'1000']);
        LimitPlan::create(['plan_id'=>'4','limit_id'=>'2','amount_yearly'=>'12000','amount_monthly'=>'1000']);
        LimitPlan::create(['plan_id'=>'4','limit_id'=>'3','amount_yearly'=>'12000','amount_monthly'=>'1000']);
        LimitPlan::create(['plan_id'=>'4','limit_id'=>'4','amount_yearly'=>'12000','amount_monthly'=>'1000']);
        LimitPlan::create(['plan_id'=>'4','limit_id'=>'5','amount_yearly'=>'12000','amount_monthly'=>'1000']);
        LimitPlan::create(['plan_id'=>'4','limit_id'=>'6','amount_yearly'=>'12000','amount_monthly'=>'1000']);
        LimitPlan::create(['plan_id'=>'4','limit_id'=>'7','amount_yearly'=>'12000','amount_monthly'=>'1000']);
        LimitPlan::create(['plan_id'=>'4','limit_id'=>'8','amount_yearly'=>'12000','amount_monthly'=>'1000']);
        LimitPlan::create(['plan_id'=>'4','limit_id'=>'9','amount_yearly'=>'12000','amount_monthly'=>'1000']);
        LimitPlan::create(['plan_id'=>'4','limit_id'=>'10','amount_yearly'=>'12000','amount_monthly'=>'1000']);
        LimitPlan::create(['plan_id'=>'4','limit_id'=>'11','amount_yearly'=>'12000','amount_monthly'=>'1000']);
        LimitPlan::create(['plan_id'=>'4','limit_id'=>'12','amount_yearly'=>'12000','amount_monthly'=>'1000']);
        LimitPlan::create(['plan_id'=>'4','limit_id'=>'13','amount_yearly'=>'12000','amount_monthly'=>'1000']);

        LimitPlan::create(['plan_id'=>'5','limit_id'=>'1','amount_yearly'=>'12000','amount_monthly'=>'1000']);
        LimitPlan::create(['plan_id'=>'5','limit_id'=>'2','amount_yearly'=>'12000','amount_monthly'=>'1000']);
        LimitPlan::create(['plan_id'=>'5','limit_id'=>'3','amount_yearly'=>'12000','amount_monthly'=>'1000']);
        LimitPlan::create(['plan_id'=>'5','limit_id'=>'4','amount_yearly'=>'12000','amount_monthly'=>'1000']);
        LimitPlan::create(['plan_id'=>'5','limit_id'=>'5','amount_yearly'=>'12000','amount_monthly'=>'1000']);
        LimitPlan::create(['plan_id'=>'5','limit_id'=>'6','amount_yearly'=>'12000','amount_monthly'=>'1000']);
        LimitPlan::create(['plan_id'=>'5','limit_id'=>'7','amount_yearly'=>'12000','amount_monthly'=>'1000']);
        LimitPlan::create(['plan_id'=>'5','limit_id'=>'8','amount_yearly'=>'12000','amount_monthly'=>'1000']);
        LimitPlan::create(['plan_id'=>'5','limit_id'=>'9','amount_yearly'=>'12000','amount_monthly'=>'1000']);
        LimitPlan::create(['plan_id'=>'5','limit_id'=>'10','amount_yearly'=>'12000','amount_monthly'=>'1000']);
        LimitPlan::create(['plan_id'=>'5','limit_id'=>'11','amount_yearly'=>'12000','amount_monthly'=>'1000']);
        LimitPlan::create(['plan_id'=>'5','limit_id'=>'12','amount_yearly'=>'12000','amount_monthly'=>'1000']);
        LimitPlan::create(['plan_id'=>'5','limit_id'=>'13','amount_yearly'=>'12000','amount_monthly'=>'1000']);

        LimitPlan::create(['plan_id'=>'6','limit_id'=>'1','amount_yearly'=>'12000','amount_monthly'=>'1000']);
        LimitPlan::create(['plan_id'=>'6','limit_id'=>'2','amount_yearly'=>'12000','amount_monthly'=>'1000']);
        LimitPlan::create(['plan_id'=>'6','limit_id'=>'3','amount_yearly'=>'12000','amount_monthly'=>'1000']);
        LimitPlan::create(['plan_id'=>'6','limit_id'=>'4','amount_yearly'=>'12000','amount_monthly'=>'1000']);
        LimitPlan::create(['plan_id'=>'6','limit_id'=>'5','amount_yearly'=>'12000','amount_monthly'=>'1000']);
        LimitPlan::create(['plan_id'=>'6','limit_id'=>'6','amount_yearly'=>'12000','amount_monthly'=>'1000']);
        LimitPlan::create(['plan_id'=>'6','limit_id'=>'7','amount_yearly'=>'12000','amount_monthly'=>'1000']);
        LimitPlan::create(['plan_id'=>'6','limit_id'=>'8','amount_yearly'=>'12000','amount_monthly'=>'1000']);
        LimitPlan::create(['plan_id'=>'6','limit_id'=>'9','amount_yearly'=>'12000','amount_monthly'=>'1000']);
        LimitPlan::create(['plan_id'=>'6','limit_id'=>'10','amount_yearly'=>'12000','amount_monthly'=>'1000']);
        LimitPlan::create(['plan_id'=>'6','limit_id'=>'11','amount_yearly'=>'12000','amount_monthly'=>'1000']);
        LimitPlan::create(['plan_id'=>'6','limit_id'=>'12','amount_yearly'=>'12000','amount_monthly'=>'1000']);
        LimitPlan::create(['plan_id'=>'6','limit_id'=>'13','amount_yearly'=>'12000','amount_monthly'=>'1000']);

        LimitPlan::create(['plan_id'=>'7','limit_id'=>'1','amount_yearly'=>'12000','amount_monthly'=>'1000']);
        LimitPlan::create(['plan_id'=>'7','limit_id'=>'2','amount_yearly'=>'12000','amount_monthly'=>'1000']);
        LimitPlan::create(['plan_id'=>'7','limit_id'=>'3','amount_yearly'=>'12000','amount_monthly'=>'1000']);
        LimitPlan::create(['plan_id'=>'7','limit_id'=>'4','amount_yearly'=>'12000','amount_monthly'=>'1000']);
        LimitPlan::create(['plan_id'=>'7','limit_id'=>'5','amount_yearly'=>'12000','amount_monthly'=>'1000']);
        LimitPlan::create(['plan_id'=>'7','limit_id'=>'6','amount_yearly'=>'12000','amount_monthly'=>'1000']);
        LimitPlan::create(['plan_id'=>'7','limit_id'=>'7','amount_yearly'=>'12000','amount_monthly'=>'1000']);
        LimitPlan::create(['plan_id'=>'7','limit_id'=>'8','amount_yearly'=>'12000','amount_monthly'=>'1000']);
        LimitPlan::create(['plan_id'=>'7','limit_id'=>'9','amount_yearly'=>'12000','amount_monthly'=>'1000']);
        LimitPlan::create(['plan_id'=>'7','limit_id'=>'10','amount_yearly'=>'12000','amount_monthly'=>'1000']);
        LimitPlan::create(['plan_id'=>'7','limit_id'=>'11','amount_yearly'=>'12000','amount_monthly'=>'1000']);
        LimitPlan::create(['plan_id'=>'7','limit_id'=>'12','amount_yearly'=>'12000','amount_monthly'=>'1000']);
        LimitPlan::create(['plan_id'=>'7','limit_id'=>'13','amount_yearly'=>'12000','amount_monthly'=>'1000']);

        LimitPlan::create(['plan_id'=>'8','limit_id'=>'1','amount_yearly'=>'12000','amount_monthly'=>'1000']);
        LimitPlan::create(['plan_id'=>'8','limit_id'=>'2','amount_yearly'=>'12000','amount_monthly'=>'1000']);
        LimitPlan::create(['plan_id'=>'8','limit_id'=>'3','amount_yearly'=>'12000','amount_monthly'=>'1000']);
        LimitPlan::create(['plan_id'=>'8','limit_id'=>'4','amount_yearly'=>'12000','amount_monthly'=>'1000']);
        LimitPlan::create(['plan_id'=>'8','limit_id'=>'5','amount_yearly'=>'12000','amount_monthly'=>'1000']);
        LimitPlan::create(['plan_id'=>'8','limit_id'=>'6','amount_yearly'=>'12000','amount_monthly'=>'1000']);
        LimitPlan::create(['plan_id'=>'8','limit_id'=>'7','amount_yearly'=>'12000','amount_monthly'=>'1000']);
        LimitPlan::create(['plan_id'=>'8','limit_id'=>'8','amount_yearly'=>'12000','amount_monthly'=>'1000']);
        LimitPlan::create(['plan_id'=>'8','limit_id'=>'9','amount_yearly'=>'12000','amount_monthly'=>'1000']);
        LimitPlan::create(['plan_id'=>'8','limit_id'=>'10','amount_yearly'=>'12000','amount_monthly'=>'1000']);
        LimitPlan::create(['plan_id'=>'8','limit_id'=>'11','amount_yearly'=>'12000','amount_monthly'=>'1000']);
        LimitPlan::create(['plan_id'=>'8','limit_id'=>'12','amount_yearly'=>'12000','amount_monthly'=>'1000']);
        LimitPlan::create(['plan_id'=>'8','limit_id'=>'13','amount_yearly'=>'12000','amount_monthly'=>'1000']);
        
        LimitPlan::create(['plan_id'=>'9','limit_id'=>'1','amount_yearly'=>'12000','amount_monthly'=>'1000']);
        LimitPlan::create(['plan_id'=>'9','limit_id'=>'2','amount_yearly'=>'12000','amount_monthly'=>'1000']);
        LimitPlan::create(['plan_id'=>'9','limit_id'=>'3','amount_yearly'=>'12000','amount_monthly'=>'1000']);
        LimitPlan::create(['plan_id'=>'9','limit_id'=>'4','amount_yearly'=>'12000','amount_monthly'=>'1000']);
        LimitPlan::create(['plan_id'=>'9','limit_id'=>'5','amount_yearly'=>'12000','amount_monthly'=>'1000']);
        LimitPlan::create(['plan_id'=>'9','limit_id'=>'6','amount_yearly'=>'12000','amount_monthly'=>'1000']);
        LimitPlan::create(['plan_id'=>'9','limit_id'=>'7','amount_yearly'=>'12000','amount_monthly'=>'1000']);
        LimitPlan::create(['plan_id'=>'9','limit_id'=>'8','amount_yearly'=>'12000','amount_monthly'=>'1000']);
        LimitPlan::create(['plan_id'=>'9','limit_id'=>'9','amount_yearly'=>'12000','amount_monthly'=>'1000']);
        LimitPlan::create(['plan_id'=>'9','limit_id'=>'10','amount_yearly'=>'12000','amount_monthly'=>'1000']);
        LimitPlan::create(['plan_id'=>'9','limit_id'=>'11','amount_yearly'=>'12000','amount_monthly'=>'1000']);
        LimitPlan::create(['plan_id'=>'9','limit_id'=>'12','amount_yearly'=>'12000','amount_monthly'=>'1000']);
        LimitPlan::create(['plan_id'=>'9','limit_id'=>'13','amount_yearly'=>'12000','amount_monthly'=>'1000']);

        LimitPlan::create(['plan_id'=>'10','limit_id'=>'1','amount_yearly'=>'12000','amount_monthly'=>'1000']);
        LimitPlan::create(['plan_id'=>'10','limit_id'=>'2','amount_yearly'=>'12000','amount_monthly'=>'1000']);
        LimitPlan::create(['plan_id'=>'10','limit_id'=>'3','amount_yearly'=>'12000','amount_monthly'=>'1000']);
        LimitPlan::create(['plan_id'=>'10','limit_id'=>'4','amount_yearly'=>'12000','amount_monthly'=>'1000']);
        LimitPlan::create(['plan_id'=>'10','limit_id'=>'5','amount_yearly'=>'12000','amount_monthly'=>'1000']);
        LimitPlan::create(['plan_id'=>'10','limit_id'=>'6','amount_yearly'=>'12000','amount_monthly'=>'1000']);
        LimitPlan::create(['plan_id'=>'10','limit_id'=>'7','amount_yearly'=>'12000','amount_monthly'=>'1000']);
        LimitPlan::create(['plan_id'=>'10','limit_id'=>'8','amount_yearly'=>'12000','amount_monthly'=>'1000']);
        LimitPlan::create(['plan_id'=>'10','limit_id'=>'9','amount_yearly'=>'12000','amount_monthly'=>'1000']);
        LimitPlan::create(['plan_id'=>'10','limit_id'=>'10','amount_yearly'=>'12000','amount_monthly'=>'1000']);
        LimitPlan::create(['plan_id'=>'10','limit_id'=>'11','amount_yearly'=>'12000','amount_monthly'=>'1000']);
        LimitPlan::create(['plan_id'=>'10','limit_id'=>'12','amount_yearly'=>'12000','amount_monthly'=>'1000']);
        LimitPlan::create(['plan_id'=>'10','limit_id'=>'13','amount_yearly'=>'12000','amount_monthly'=>'1000']);

        LimitPlan::create(['plan_id'=>'11','limit_id'=>'1','amount_yearly'=>'12000','amount_monthly'=>'1000']);
        LimitPlan::create(['plan_id'=>'11','limit_id'=>'2','amount_yearly'=>'12000','amount_monthly'=>'1000']);
        LimitPlan::create(['plan_id'=>'11','limit_id'=>'3','amount_yearly'=>'12000','amount_monthly'=>'1000']);
        LimitPlan::create(['plan_id'=>'11','limit_id'=>'4','amount_yearly'=>'12000','amount_monthly'=>'1000']);
        LimitPlan::create(['plan_id'=>'11','limit_id'=>'5','amount_yearly'=>'12000','amount_monthly'=>'1000']);
        LimitPlan::create(['plan_id'=>'11','limit_id'=>'6','amount_yearly'=>'12000','amount_monthly'=>'1000']);
        LimitPlan::create(['plan_id'=>'11','limit_id'=>'7','amount_yearly'=>'12000','amount_monthly'=>'1000']);
        LimitPlan::create(['plan_id'=>'11','limit_id'=>'8','amount_yearly'=>'12000','amount_monthly'=>'1000']);
        LimitPlan::create(['plan_id'=>'11','limit_id'=>'9','amount_yearly'=>'12000','amount_monthly'=>'1000']);
        LimitPlan::create(['plan_id'=>'11','limit_id'=>'10','amount_yearly'=>'12000','amount_monthly'=>'1000']);
        LimitPlan::create(['plan_id'=>'11','limit_id'=>'11','amount_yearly'=>'12000','amount_monthly'=>'1000']);
        LimitPlan::create(['plan_id'=>'11','limit_id'=>'12','amount_yearly'=>'12000','amount_monthly'=>'1000']);
        LimitPlan::create(['plan_id'=>'11','limit_id'=>'13','amount_yearly'=>'12000','amount_monthly'=>'1000']);
    
                
    }
}
