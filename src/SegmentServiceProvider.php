<?php

namespace CachetHQ\Segment;

use CachetHQ\Segment\Segment;
use Illuminate\Support\ServiceProvider;

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
    }

    /**
     * Register the service provider.
     *
     * @return void
     */
    public function register()
    {
        $this->app->singleton('segment', function ($app) {
            return new Segment($app['config']->get('cachethq/segment::config'));
        });
    }
}
