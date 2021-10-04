<?php

declare(strict_types=1);

use App\Http\Controllers\Admin\CustomerController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\ProductController;
use App\Http\Controllers\Admin\ServiceController;
use App\Http\Controllers\Admin\UserController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use Stancl\Tenancy\Middleware\InitializeTenancyByDomainOrSubdomain;
use Stancl\Tenancy\Middleware\PreventAccessFromCentralDomains;

/*
|--------------------------------------------------------------------------
| Tenant Routes
|--------------------------------------------------------------------------
|
| Here you can register the tenant routes for your application.
| These routes are loaded by the TenantRouteServiceProvider.
|
| Feel free to customize them however you want. Good luck!
|
*/




Route::middleware([
    'web',
    InitializeTenancyByDomainOrSubdomain::class,
    PreventAccessFromCentralDomains::class,
])
    ->group(function () {
        Auth::routes([
            'register' => false,
            'verify' => false,
            'reset' => true,
        ]);


        Route::middleware(['auth'])
            ->group(function () {
                Route::get('/', [DashboardController::class, 'index']);

                // Customers
                Route::get('customers', [CustomerController::class, 'index']);
                Route::get('customers/create', [CustomerController::class, 'create']);
                Route::post('customers/store', [CustomerController::class, 'store']);
                Route::get('customers/edit/{customer}', [CustomerController::class, 'edit']);
                Route::put('customers/update/{customer}', [CustomerController::class, 'update']);
                Route::delete('customers/destroy/{customer}', [CustomerController::class, 'delete']);
                Route::get('customers/show/{customer}', [CustomerController::class, 'show']);

                // // Products
                Route::get('products', [ProductController::class, 'index']);
                Route::get('products/create', [ProductController::class, 'create']);
                Route::post('products/store', [ProductController::class, 'store']);
                Route::get('products/edit/{product}', [ProductController::class, 'edit']);
                Route::put('products/update/{product}', [ProductController::class, 'update']);
                Route::delete('products/destroy/{product}', [ProductController::class, 'delete']);
                Route::get('products/show/{product}', [ProductController::class, 'show']);

                // // Services
                Route::get('services', [ServiceController::class, 'index']);
                Route::get('services/create', [ServiceController::class, 'create']);
                Route::post('services/store', [ServiceController::class, 'store']);
                Route::get('services/edit/{service}', [ServiceController::class, 'edit']);
                Route::put('services/update/{service}', [ServiceController::class, 'update']);
                Route::delete('services/destroy/{service}', [ServiceController::class, 'delete']);
                Route::get('services/show/{service}', [ServiceController::class, 'show']);

                // // Users
                Route::get('users', [UserController::class, 'index']);
                Route::get('users/create', [UserController::class, 'create']);
                Route::post('users/store', [UserController::class, 'store']);
                Route::get('users/edit/{user}', [UserController::class, 'edit']);
                Route::put('users/update/{user}', [UserController::class, 'update']);
                Route::delete('users/destroy/{user}', [UserController::class, 'delete']);
                Route::get('users/show/{user}', [UserController::class, 'show']);
            });
    });
