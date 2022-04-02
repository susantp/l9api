<?php

namespace App\Providers;


use App\Models\Inventory;
use App\Models\Product\Product;
use App\Models\Warehouse\Warehouse;
use App\Policies\InventoryPolicy;
use App\Policies\ProductPolicy;
use App\Policies\WarehousePolicy;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The policy mappings for the application.
     *
     * @var array<class-string, class-string>
     */
    protected $policies = [
        // 'App\Models\Model' => 'App\Policies\ModelPolicy',
        Product::class => ProductPolicy::class,
        Inventory::class => InventoryPolicy::class,
        Warehouse::class => WarehousePolicy::class,
    ];

    /**
     * Register any authentication / authorization services.
     *
     * @return void
     */
    public function boot()
    {
        $this->registerPolicies();
        //
    }
}
