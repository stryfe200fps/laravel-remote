<?php

namespace Stryfe200fps\Remote\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Stryfe200fps\Remote\Remote
 */
class Remote extends Facade
{
    protected static function getFacadeAccessor()
    {
        return \Stryfe200fps\Remote\Remote::class;
    }
}
