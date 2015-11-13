<?php

namespace Illuminate\Pipeline;

use Illuminate\Support\ServiceProvider;

class PipelineServiceProvider extends ServiceProvider
{
    /**
     * Indicates if loading of the provider is deferred.
     *
     * @var bool
     */
    protected $defer = true;

    /**
     * Register the service provider.
     *
     * @return void
     */
    public function register()
    {
        $this->app->singleton(
            'Illuminate\Pipeline\Contracts\Hub', 'Illuminate\Pipeline\Hub'
        );
        $this->app->singleton(
            'Illuminate\Pipeline\Contracts\Pipeline', 'Illuminate\Pipeline\Pipeline'
        );
    }

    /**
     * Get the services provided by the provider.
     *
     * @return array
     */
    public function provides()
    {
        return [
            'Illuminate\Pipeline\Contracts\Hub', 'Illuminate\Pipeline\Contracts\Pipeline'
        ];
    }
}
