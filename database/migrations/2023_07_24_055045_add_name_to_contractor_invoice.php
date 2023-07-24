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
        Schema::table('contractor_invoices', function (Blueprint $table) {
                $table->string('contractor_name')
                ->after('id')
                ->default('KLM');
            });
      
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('contractor_invoices', function (Blueprint $table) {
            //
        });
    }
};
