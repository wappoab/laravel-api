<?php

namespace Wappo\ModelApi\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Wappo\ModelApi\ModelApi
 */
class ModelApi extends Facade
{
    protected static function getFacadeAccessor(): string
    {
        return \Wappo\ModelApi\ModelApi::class;
    }
}
