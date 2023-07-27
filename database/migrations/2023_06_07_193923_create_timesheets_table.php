<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use SebastianBergmann\Diff\Diff;
use Illuminate\Support\Carbon;

return new class extends Migration
{

    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('timesheets', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained()->onDelete('cascade');
            $table->date('week_beginning');
            $table->float('mon_hours')->default(0.0);
            $table->float('tue_hours')->default(0.0);
            $table->float('wed_hours')->default(0.0);
            $table->float('thurs_hours')->default(0.0);
            $table->float('fri_hours')->default(0.0);
            $table->float('sat_hours')->default(0.0);
            $table->float('sun_hours')->default(0.0);
            $table->float('total_hours')->storedAs('mon_hours + tue_hours + wed_hours + thurs_hours + fri_hours + sat_hours + sun_hours');
         
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('timesheets');
    }
};
