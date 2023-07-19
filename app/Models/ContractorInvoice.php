<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class ContractorInvoice extends Model
{
    use HasFactory;

    protected $fillable = [
        'date',
        'amount_paid',
        'employee_count'
    ];

    // public function contractor(): BelongsTo{
    //     return $this->belongsTo(Contractor::class);
    // }
}
