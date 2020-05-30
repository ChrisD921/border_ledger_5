<?php

namespace App\Providers;

use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Gate;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The policy mappings for the application.
     *
     * @var array
     */
    protected $policies = [
        // 'App\Model' => 'App\Policies\ModelPolicy',
       //   'App\Personnel' => 'App\Policies\PersonnelPolicy',
    ];

    /**
     * Register any authentication / authorization services.
     *
     * @return void
     */
    public function boot()
    {
        $this->registerPolicies();

        Gate::define('accessManagement', function($user) {
            if ($user->is_admin==1) {
                return redirect('/borderLedger/management');
            }else {
                return redirect('/borderLedger/ledger');
            }
           
        });

        //
        // Gate::define('view-management', function ($user) {
        //     return $user->isAdmin;
        // });
    
        // Gate::define('update-post', function ($user, $post) {
        //     return $user->id === $post->user_id;
        // });
    }
}
