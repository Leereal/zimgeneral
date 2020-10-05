<?php

namespace Database\Seeders;

use App\Models\Premium;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PremiumSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::statement('SET FOREIGN_KEY_CHECKS=0;');
        Premium::truncate();
        DB::statement('SET FOREIGN_KEY_CHECKS=1;');
        
        Premium::create(['plan_id'=>'1','principal'=>'50','dependent'=>'40','group_principal'=>'45','group_dependent'=>'35']);
        Premium::create(['plan_id'=>'2','principal'=>'50','dependent'=>'40','group_principal'=>'45','group_dependent'=>'35']);
        Premium::create(['plan_id'=>'3','principal'=>'50','dependent'=>'40','group_principal'=>'45','group_dependent'=>'35']);
        Premium::create(['plan_id'=>'4','principal'=>'50','dependent'=>'40','group_principal'=>'45','group_dependent'=>'35']);
        Premium::create(['plan_id'=>'5','principal'=>'50','dependent'=>'40','group_principal'=>'45','group_dependent'=>'35']);
        Premium::create(['plan_id'=>'6','principal'=>'50','dependent'=>'40','group_principal'=>'45','group_dependent'=>'35']);
        Premium::create(['plan_id'=>'7','principal'=>'50','dependent'=>'40','group_principal'=>'45','group_dependent'=>'35']);
        Premium::create(['plan_id'=>'8','principal'=>'50','dependent'=>'40','group_principal'=>'45','group_dependent'=>'35']);
        Premium::create(['plan_id'=>'9','principal'=>'50','dependent'=>'40','group_principal'=>'45','group_dependent'=>'35']);
        Premium::create(['plan_id'=>'10','principal'=>'50','dependent'=>'40','group_principal'=>'45','group_dependent'=>'35']);
        Premium::create(['plan_id'=>'11','principal'=>'50','dependent'=>'40','group_principal'=>'45','group_dependent'=>'35']);
        
    }
}
