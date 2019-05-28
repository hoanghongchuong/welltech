<?php

namespace App\Providers;

use Illuminate\Support\Facades\Gate;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The policy mappings for the application.
     *
     * @var array
     */
    protected $policies = [
        'App\Model' => 'App\Policies\ModelPolicy',
    ];

    /**
     * Register any authentication / authorization services.
     *
     * @return void
     */
    public function boot()
    {
        $this->registerPolicies();
        
        //define Gate
        Gate::define('admin_manager', 'App\Policies\AdminPolicy@adminManager');
        Gate::define('can_product_category', 'App\Policies\AdminPolicy@categoryProductManager');
        Gate::define('can_product', 'App\Policies\AdminPolicy@productManager');
        Gate::define('can_orders', 'App\Policies\AdminPolicy@ordersManager');
        Gate::define('can_news_category', 'App\Policies\AdminPolicy@categoryNewsManager');        
        Gate::define('can_news', 'App\Policies\AdminPolicy@newsManager');
        Gate::define('can_contact', 'App\Policies\AdminPolicy@contactManager');
        Gate::define('can_menu', 'App\Policies\AdminPolicy@menuManager');
        Gate::define('can_partner', 'App\Policies\AdminPolicy@partnerManager');
        Gate::define('can_about', 'App\Policies\AdminPolicy@aboutManager');
        Gate::define('can_recruitment', 'App\Policies\AdminPolicy@recruitmentManager');
        Gate::define('can_slider', 'App\Policies\AdminPolicy@sliderManager');
        Gate::define('can_project', 'App\Policies\AdminPolicy@projectManager');
        Gate::define('can_business_area', 'App\Policies\AdminPolicy@businessManager');
    }
}
