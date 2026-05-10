<?php
/**
 * LARAVEL CONTROLLERS
 * Price Controller (API)
 * 
 * File Location: app/Http/Controllers/PriceController.php
 */

namespace App\Http\Controllers;

use App\Models\Price;
use Illuminate\Http\JsonResponse;

class PriceController extends Controller
{
    public function index(): JsonResponse
    {
        $prices = Price::all();
        return response()->json([
            'success' => true,
            'data' => $prices,
        ]);
    }

    public function show(string $fuelType): JsonResponse
    {
        $price = Price::where('fuel_type', $fuelType)->first();
        
        if (!$price) {
            return response()->json([
                'success' => false,
                'message' => 'Price not found',
            ], 404);
        }

        return response()->json([
            'success' => true,
            'data' => $price,
        ]);
    }
}
