<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class JobListing extends Model
{
    use HasFactory;

    protected $fillable = [
        'description',
        'location',
        'licenses',
        'hours', 
        'enquiries'
    ];

    public function users(): BelongsToMany{
        return $this->belongsToMany(User::class, 'user_job_listing',  'job_listing_id', 'user_id');
    }
}
