<?php

namespace App\Providers;

use App\Http\Controllers\BestSellerController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\MiniCartController;
use App\Models\Categories;
use App\Models\Products;
use Illuminate\Contracts\Support\Renderable;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Response;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\ServiceProvider;
use Illuminate\View\View;


class AppServiceProvider extends ServiceProvider
{


    protected $listen = ['App\Events\SendOrderMail'
    =>[
        'App\Listeners\SendOrderMail'
        ],
    ];
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot ()
    {
        Schema::defaultStringLength(191);
        //categories
        view()->composer('*', function ($view) {
            $categories = CategoryController::categories();
            $view->with('categories_all', $categories);

        });

        //minicart
       view()->composer('layouts.minicart', function ($view) {
            $mini_cart = new MiniCartController();
            $cart = $mini_cart::miniCart();
            $mini_cart_compact = $cart['mini_cart'];
            $products_all_compact = $cart['products_all'];
            $total_price_compact = $cart['total_price'];
            $shipping_all_compact = $cart['shipping'];
           $view->with('mini_cart', $cart['mini_cart'])
                ->with('products_all', $cart['products_all'])
                ->with('total_price', $cart['total_price'])
                ->with('shipping_all',$cart['shipping']);
        });
        //bestseller
        view()->composer('layouts.bestseller', function ($view) {
            $best_seller = new BestSellerController();
            $bestseller= $best_seller::bestseller();
            $view->with('bestseller', $bestseller);
        });
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register ()
    {
        //
    }
}
