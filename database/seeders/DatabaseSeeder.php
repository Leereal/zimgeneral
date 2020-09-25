<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
            BranchSeeder::class,
            PlanSeeder::class,
            BankSeeder::class,
            CurrencySeeder::class,
            RoleSeeder::class,
        ]);
        \App\Models\Group::factory(20)->create();
        \App\Models\User::factory(60)->create();
        $this->call([           
            RoleUserSeeder::class,
        ]);
        \App\Models\ServiceProvider::factory(30)->create();       
        \App\Models\Employee::factory(20)->create();        
        \App\Models\Client::factory(100)->create();       
        \App\Models\SPBankDetail::factory(30)->create();
        \App\Models\ClientBankDetail::factory(100)->create();
        \App\Models\CompanyBankDetail::factory(10)->create();
        
    }
}
