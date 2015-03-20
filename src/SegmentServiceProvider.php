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
        $this->setupConfig();

        $writeKey = $this->app->config->get('segment.write_key');
        $enabled = $this->app->config->get('segment.enabled');

        if ($writeKey && $enabled) {
            Segment::init($writeKey);
        }
    }

    /**
     * Setup the config.
     *
     * @return void
     */
    protected function setupConfig()
    {
        $source = realpath(__DIR__.'/../config/segment.php');

        $this->publishes([$source => config_path('segment.php')]);

        $this->mergeConfigFrom($source, 'segment');
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
}
