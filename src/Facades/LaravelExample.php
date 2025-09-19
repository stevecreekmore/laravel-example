<?php

namespace SteveCreekmore\LaravelExample\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \SteveCreekmore\LaravelExample\LaravelExample
 */
class LaravelExample extends Facade
{
    protected static function getFacadeAccessor(): string
    {
        return \SteveCreekmore\LaravelExample\LaravelExample::class;
    }
}
