<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class RepositoryServiceProvider extends ServiceProvider
{
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
        $this->app->bind(\App\Repositories\PessoaRepository::class, \App\Repositories\PessoaRepositoryEloquent::class);
        $this->app->bind(\App\Repositories\MaterialRepository::class, \App\Repositories\MaterialRepositoryEloquent::class);
        $this->app->bind(\App\Repositories\SolicitacaoDeMaterialRepository::class, \App\Repositories\SolicitacaoDeMaterialRepositoryEloquent::class);
        //:end-bindings:
    }
}
