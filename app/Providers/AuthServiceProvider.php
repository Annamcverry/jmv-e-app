<?php

namespace App\Providers;

use App\Models\User;
use Illuminate\Support\Facades\Gate;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The model to policy mappings for the application.
     *
     * @var array<class-string, class-string>
     */
    protected $policies = [
        
        User::class => UserPolicy::class,
    ];

    /**
     * Register any authentication / authorization services.
     */
    public function boot(): void
    {
        //
        Gate::define('is_admin', function(User $user){
            return $user->role == 'admin';
        });
        
        Gate::define('is_employee', function(User $user){
            return $user->role == 'employee';
        });

        //Allow Admin to update employee
        Gate::define('update-user', function(User $user){
            return $user->role == 'is_admin'? true : null;
        });

    }
}
