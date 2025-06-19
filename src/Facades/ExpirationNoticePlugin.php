<?php

namespace MarcelWeidum\ExpirationNoticePlugin\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \MarcelWeidum\ExpirationNoticePlugin\ExpirationNotice
 */
class ExpirationNoticePlugin extends Facade
{
    protected static function getFacadeAccessor()
    {
        return \MarcelWeidum\ExpirationNoticePlugin\ExpirationNotice::class;
    }
}
