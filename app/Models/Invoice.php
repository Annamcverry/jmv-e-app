<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Carbon;

class Invoice extends Model
{
    use HasFactory;

    protected $fillable = [
        'week_begining',
        'hours_worked',
        // 'wage',
        'excange_rate'
    ];

    public function user(){
        return $this->belongsTo(User::class);
    }
}
