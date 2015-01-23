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

        /**
         * Load the Segment.io configuration.
         */
        $writeKey = $this->app->config->get('segment::config.write_key');
        Segment::init($writeKey);
    }

    /**
     * Register the service provider.
     *
     * @return void
     */
    public function register()
    {
        //
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
