<?php

namespace App\Providers;

use App\Model\Customer;
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
    ];

    /**
     * Register any authentication / authorization services.
     *
     * @return void
     */
    public function boot()
    {
        $this->registerPolicies();

        Gate::define(
            'read-only', function ($user) {
                return $user->isReadOnly();
            }
        );

        Gate::define(
            'edit-res', function ($user) {
                return $user->isEditRes();
            }
        );

        Gate::define(
            'view-allowed-record-customer', function ($user, Customer $customer, $id) {
                return $customer->isAllowedRecord($id);
            }
        );
    }
}
