<?php

namespace CachetHQ\Segment;

use Illuminate\Config\Repository;
use Segment as SegmentCom;

class Segment extends SegmentCom
{
    /**
     * Constructs a new instance of the segmentio library.
     *
     * @param array $config
     */
    public function __construct($config)
    {
        static::init($config['write_key']);
    }
}
