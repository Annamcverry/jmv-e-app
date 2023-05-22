<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EmployeeInvoice extends Model
{

    use HasFactory;
    protected $fillable = [
        'user_id','invoice_id'
    ];

    public function invoice(){
        return $this->belongsToMany(Invoice::class);
    }
}
