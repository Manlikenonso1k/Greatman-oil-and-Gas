<?php
/**
 * LARAVEL 11 MIGRATION FILE
 * Create Prices Table
 * 
 * File Location: database/migrations/2026_05_10_124500_create_prices_table.php
 */

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('prices', function (Blueprint $table) {
            $table->id();
            $table->enum('fuel_type', ['Petrol', 'Diesel', 'Gas'])->unique();
            $table->decimal('price_per_unit', 10, 2);
            $table->string('currency', 3)->default('NGN');
            $table->unsignedBigInteger('last_updated_by')->nullable();
            $table->timestamps();
            
            $table->index('fuel_type');
            $table->index('updated_at');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('prices');
    }
};
