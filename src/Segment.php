<?php

namespace CachetHQ\Segment;

use Illuminate\Config\Repository;
use Segment as SegmentCom;

class Segment extends SegmentCom
{
    /**
     * Constructs a new instance of the segmentio library.
     *
     * @param \Illuminate\Config\Repository $config
     */
    public function __construct(Repository $config) {
        static::init($config->get('write_key'));
    }
}
