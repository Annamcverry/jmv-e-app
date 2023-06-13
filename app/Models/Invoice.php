<?php

namespace App\Models;

use AshAllenDesign\LaravelExchangeRates\Classes\ExchangeRate;
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
        'wage',
        'exchange_rate'
    ];

    // protected $attributes = [
    //     $exchangeRates = new ExchangeRate();
    //     $result = $exchangeRates->exchangeRate('GBP', 'EUR');
    //     'exchange_rate'=>$result;
    // ]

    public function user(): BelongsTo{
        return $this->belongsTo(User::class, 'foreign_key');
    }

    public function getWage(){
        return $this->user()->multiply('rate')* $this->invoices('hours_worked'); 
    }

    // public function invoices(){
    //     return $this->belongsToMany(UserInvoice::class);
    // }

}
