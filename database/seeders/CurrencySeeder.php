<?php

namespace Database\Seeders;

use App\Models\Currency;
use Illuminate\Database\Seeder;

class CurrencySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $usd = Currency::create(['name'=>'USD','symbol'=>'US$']);
        $zar = Currency::create(['name'=>'ZAR','symbol'=>'R']);
        // $btc = App\Currency::create(['name'=>'BTC','symbol'=>'₿']);
        $zwl = Currency::create(['name'=>'ZWL','symbol'=>'ZWL$']);
        // $gbp = App\Currency::create(['name'=>'GBP','symbol'=>'£']);
    }
}
