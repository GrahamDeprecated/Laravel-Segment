<?php

namespace CachetHQ\Segment;

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

        return new Segment($this->app['config']->get('cachethq/segment::config'));
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
