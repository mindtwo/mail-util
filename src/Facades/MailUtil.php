<?php

namespace mindtwo\MailUtil\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \mindtwo\MailUtil\MailUtil
 */
class MailUtil extends Facade
{
    protected static function getFacadeAccessor(): string
    {
        return \mindtwo\MailUtil\MailUtil::class;
    }
}
