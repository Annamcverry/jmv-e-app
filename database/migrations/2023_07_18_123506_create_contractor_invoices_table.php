<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('contractor_invoices', function (Blueprint $table) {
            $table->id();
            // $table->foreignId('contractor_id')->constrained()->onDelete('cascade')->default(1);
            $table->date('date');
            $table->float('amount_paid');
            // $table->float('cumulative_hours_worked');
            $table->tinyInteger('employee_count');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('contractor_invoices');
    }
};
