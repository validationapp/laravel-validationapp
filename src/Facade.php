<?php

namespace Validationapp;

use Illuminate\Support\Facades\Facade as FacadeAlias;
use Validationapp\Sdk\Validationapp;

class Facade extends FacadeAlias
{
    /**
     * @method static void validate($email, $ip_address = null): array
     * @method static void batch(array $emails): array
     * @method static void checkBatch($uuid): array
     * @method static void suggest($email, $limit = 5): array
     *
     * @see \Validationapp\Sdk\Validationapp
     */
    protected static function getFacadeAccessor()
    {
        return Validationapp::class;
    }
}
