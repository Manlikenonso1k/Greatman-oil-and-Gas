<?php
/**
 * LARAVEL SEEDER
 * Price Seeder
 * 
 * File Location: database/seeders/PriceSeeder.php
 */

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Price;

class PriceSeeder extends Seeder
{
    public function run()
    {
        Price::create([
            'fuel_type' => 'Petrol',
            'price_per_unit' => 617.00,
            'currency' => 'NGN',
        ]);

        Price::create([
            'fuel_type' => 'Diesel',
            'price_per_unit' => 1150.00,
            'currency' => 'NGN',
        ]);

        Price::create([
            'fuel_type' => 'Gas',
            'price_per_unit' => 14200.00,
            'currency' => 'NGN',
        ]);
    }
}
