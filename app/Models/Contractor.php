<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Contractor extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'email_address',
        'contact_no'
    ];
    // public function contractorInvoices(): BelongsTo{
    //     return $this->belongsToMany(ContractorInvoice::class);
    //    }
    public function contractorInvoices(){
        return $this->hasOne('ContractInvoice', 'contractor_name');
    }
}
