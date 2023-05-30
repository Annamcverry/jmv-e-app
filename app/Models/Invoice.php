<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Carbon;

class Invoice extends Model
{
    use HasFactory;
    // use SoftDeletes;

    protected $fillable = [
        'week_beginning',
        'hours_worked',
        // 'wage',
        'excange_rate'
    ];

    public function user(): BelongsTo{
        return $this->belongsTo(User::class, 'foreign_key');
    }
    // public function invoices(){
    //     return $this->belongsToMany(UserInvoice::class);
    // }

}
