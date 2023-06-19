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
            $table->datetime('week_beginning');
            $table->float('mon_hours')->nullable();
            $table->float('tue_hours')->nullable();
            $table->float('wed_hours')->nullable();
            $table->float('thurs_hours')->nullable();
            $table->float('fri_hours')->nullable();
            $table->float('sat_hours')->nullable();
            $table->float('sun_hours')->nullable();;
            $table->float('total_hours')->storedAs('mon_hours + tue_hours + wed_hours + thurs_hours + fri_hours + sat_hours + sun_hours');
            // $table->time('mon_start_time');
            // $table->time('mon_end_time');
            // $table->float('mon_hours')->storedAs('mon_end_time' - 'mon_start_time');
            // $table->time('tue_start_time');
            // $table->time('tue_end_time');
            // $table->float('tue_hours')->storedAs('tue_end_time' - 'tue_start_time');
            // $table->time('wed_start_time');
            // $table->time('wed_end_time');
            // $table->time('thurs_start_time');
            // $table->time('thurs_end_time');
            // $table->time('fri_start_time');
            // $table->time('fri_end_time');
            // $table->time('sat_start_time');
            // $table->time('sat_end_time');
            // $table->time('sun_start_time');
            // $table->time('sun_end_time');
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
