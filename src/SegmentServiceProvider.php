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
        $this->package('cachethq/segment', 'cachethq/segment', __DIR__);

        $writeKey = $this->app->config->get('cachethq/segment::write_key');
        $enabled = $this->app->config->get('cachethq/segment::enabled');
        if ($writeKey && $enabled) {
            Segment::init($writeKey);
        }
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
