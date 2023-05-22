<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Carbon;

return new class extends Migration
{
    /**
     * Run the migrations.
     */

    public function up(): void
    {
        Schema::create('invoices', function (Blueprint $table) {
            $table->id();
            // $table->foreignId('user_id')->constrained();
            $table->date('week_beginning');
            // $table->float('hourly_rate');
            $table->float('hours_worked');
            // $table->float('wage')->storedAs('users.rate * hours_worked')->nullable();
            $table->float('exchange_rate');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('invoices');
    }
};
