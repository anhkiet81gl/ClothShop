<?php

namespace App\Providers;
use App\Models\Products;
use App\Models\Categories;
use Session;
use App\Cart;

use Illuminate\Support\ServiceProvider;
use PhpOffice\PhpSpreadsheet\Calculation\Category;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {

        if(env('REDIRECT_HTTPS')) {
            $this->app['request']->server->set('HTTPS', true);
        }

        view()->composer('layouts.clothshop.header',function($view){
            $loai = Categories::all();
            $view->with('loai',$loai);

        });

        view()->composer(['layouts.clothshop.header', 'clothshop.cart'],function($view){
            if(Session('cart')){
                $oldCart = Session::get('cart');
                $cart = new Cart($oldCart);
                $view->with(['cart'=>Session::get('cart'),'product_cart'=>$cart->items,'totalPrice'=>$cart->totalPrice,'totalQty'=>$cart->totalQty]);
            }
        });
    }
}
