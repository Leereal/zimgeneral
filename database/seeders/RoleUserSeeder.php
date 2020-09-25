<?php

namespace Database\Seeders;

use App\Models\Role;
use App\Models\User;
use Illuminate\Database\Seeder;

class RoleUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $roles = Role::all();
            // Populate the pivot table
            User::all()->each(function ($user) use ($roles) { 
                $user->roles()->attach(
                    $roles->random(rand(1, 5))->pluck('id')->toArray()
                ); 
            });
    }
}
