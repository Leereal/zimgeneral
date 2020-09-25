<?php

namespace Database\Seeders;

use App\Models\Role;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::statement('SET FOREIGN_KEY_CHECKS=0;');
        Role::truncate();
        DB::statement('SET FOREIGN_KEY_CHECKS=1;');
        
        Role::create(['name'=>'Client']);
        Role::create(['name'=>'Service Provider']);
        Role::create(['name'=>'System Admin']);
        Role::create(['name'=>'Administrator']);
        Role::create(['name'=>'Marketing Consultant']);
        Role::create(['name'=>'Marketing Officer']);
        Role::create(['name'=>'Claims Officer']);
        Role::create(['name'=>'Team Leader']);
        Role::create(['name'=>'Principal Officer']);
        Role::create(['name'=>'Chairman']);        
        Role::create(['name'=>'Brand Ambassador']); 
    }
}
