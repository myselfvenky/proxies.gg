<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Route;

class ProductServiceProvider extends ServiceProvider
{
    public function boot()
    {
        View::composer('*', function ($view) {
            $currentRouteName = Route::currentRouteName();

            $routeToDbSlugMap = [
                'product.datacenter' => 'datacenter',
                'product.residential' => 'ipv4',
                'product.ipv6' => 'ipv6',
            ];

            $productType = $routeToDbSlugMap[$currentRouteName] ?? null;

            if ($productType) {
                $products = DB::table('plans')
                ->where('slug', $productType)
                ->where('active', '1')
                ->orderBy('price')
                ->get();

                // Decode JSON features for each product
                foreach ($products as $product) {
                    $product->features = json_decode($product->features);
                }

                $view->with('products', $products);
            }
        });
    }

    public function register()
    {
        //
    }
}
