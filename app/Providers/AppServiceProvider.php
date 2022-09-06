<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use DB;

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
        //
        view()->composer('*', function($view){
            $view->with([
                'categories'=>DB::table('categories')->get(),
                'products' => DB::table('products')
                                ->join('categories', 'products.category_id', '=', 'categories.id')
                                ->select('products.*')
                                ->get(),
            ]);
        });
    }
}
