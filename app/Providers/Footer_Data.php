<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Models\Footerdata;

class Footer_Data extends ServiceProvider
{
    public $footer_data;
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        $this->footer_data = Footerdata::orderBy('updated_at','DESC')->first();
        view()->composer('layouts.footer',function($view) {
            $view->with(['footer_data' => $this->footer_data]);
        });
    }
}
