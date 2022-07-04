<?php

namespace App\Providers;

use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Gate;
use App\Models\User;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The policy mappings for the application.
     *
     * @var array<class-string, class-string>
     */
    protected $policies = [
        // 'App\Models\Model' => 'App\Policies\ModelPolicy',
    ];

    /**
     * Register any authentication / authorization services.
     *
     * @return void
     */
    public function boot()
    {
        $this->registerPolicies();

        //Juste un test, à modifier
        Gate::define('root', function (User $user) {
            return $user->isRoot();
        });

        //Juste un test, à modifier
        Gate::define('admin', function (User $user) {
            return $user->isAdmin();
        });
        //Juste un test, à modifier
        Gate::define('editor', function (User $user) {
            return $user->isEditor();
        });
        //Juste un test, à modifier
        Gate::define('access-dashboard', function (User $user) {
            return  $user->isEditor() || $user->isAdmin();
        });
    }
}
