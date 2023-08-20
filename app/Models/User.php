<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'role',
        'name',
        'email',
        'password',
        'contact_no' => 'required|min:8|max:11|regex:/^([0-9\s\-\+\(\)]*)$/',
        'rate',
        'job_role',
        'licences',
        'safepass'
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function getRedirectRoute(){
        return match((string)$this->role){
            'admin' => 'admindashboard',
            'employee'=> 'dashboard',
        };
    }

    // protected $attributes = [
    //     'job_role'=>'employee'
    // ];

    public function joblistings(): BelongsToMany{
        return $this->belongsToMany(JobListing::class , 'user_job_listing', 'user_id', 'job_listing_id');
    }

  
}
