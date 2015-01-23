<?php

namespace CachetHQ\Segment;

use Illuminate\Support\ServiceProvider;
use Segment;

class SegmentServiceProvider extends ServiceProvider
{
    /**
     * Boot the service provider.
     *
     * @return void
     */
    public function boot()
    {
        $this->package('cachethq/segment');
    }

    /**
     * Register the service provider.
     *
     * @return void
     */
    public function register()
    {
        $this->app['segment'] = $this->app->share(function($app) {
            return Segment::init($app['config']->get('segment::config.write_key'));
        });
    }

    /**
     * Get the services provided by the provider.
     *
     * @return array
     */
    public function provides()
    {
        return array();
    }
}
