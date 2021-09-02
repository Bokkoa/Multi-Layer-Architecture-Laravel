<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Database\Schema\Blueprint;

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

        Blueprint::macro('commonFieldsWithDelete', function(){

            $this->uuid('created_by')->nullable();
            $this->foreign('created_by')->references('id')->on('users')->onDelete('set null');
            
            $this->uuid('updated_by')->nullable();
            $this->foreign('updated_by')->references('id')->on('users')->onDelete('set null');

            $this->uuid('deleted_by')->nullable();
            $this->foreign('deleted_by')->references('id')->on('users')->onDelete('set null');

            $this->softDeletes();
            $this->timestamps();
        });

    }
}
