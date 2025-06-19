<?php

namespace MarcelWeidum\ExpirationNoticePlugin\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \MarcelWeidum\ExpirationNoticePlugin\ExpirationNoticePlugin
 */
class ExpirationNoticePlugin extends Facade
{
    protected static function getFacadeAccessor()
    {
        return \MarcelWeidum\ExpirationNoticePlugin\ExpirationNoticePlugin::class;
    }
}
