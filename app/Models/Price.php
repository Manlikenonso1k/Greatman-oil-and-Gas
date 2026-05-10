<?php
/**
 * LARAVEL 11 MODEL
 * Price Model
 * 
 * File Location: app/Models/Price.php
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Price extends Model
{
    protected $fillable = ['fuel_type', 'price_per_unit', 'currency', 'last_updated_by'];

    protected $casts = [
        'price_per_unit' => 'decimal:2',
        'created_at' => 'datetime',
        'updated_at' => 'datetime',
    ];

    public function updatedBy()
    {
        return $this->belongsTo(User::class, 'last_updated_by');
    }

    public static function getByFuelType($fuelType)
    {
        return static::where('fuel_type', $fuelType)->first();
    }

    public static function getAllPrices()
    {
        return static::all()->mapWithKeys(function ($price) {
            return [$price->fuel_type => $price->price_per_unit];
        });
    }
}
