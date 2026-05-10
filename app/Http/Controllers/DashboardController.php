<?php

namespace App\Http\Controllers;

use App\Models\Price;

class DashboardController extends Controller
{
    public function index()
    {
        $prices = Price::all();
        return view('dashboard', compact('prices'));
    }
}
