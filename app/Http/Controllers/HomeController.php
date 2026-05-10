<?php
/**
 * LARAVEL CONTROLLERS
 * Home Controller
 * 
 * File Location: app/Http/Controllers/HomeController.php
 */

namespace App\Http\Controllers;

use App\Models\Price;
use Illuminate\View\View;

class HomeController extends Controller
{
    public function index(): View
    {
        $prices = Price::all();
        return view('pages.home', compact('prices'));
    }

    public function lpgTrust(): View
    {
        $prices = Price::all();
        return view('pages.lpg-trust', compact('prices'));
    }

    public function locator(): View
    {
        return view('pages.locator');
    }

    public function order(): View
    {
        $prices = Price::all();
        return view('pages.order', compact('prices'));
    }
}
