<?php

namespace App\Facades;

use Illuminate\Support\Facades\Facade;

class UserRepository extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'UserRepository';
    }
}
