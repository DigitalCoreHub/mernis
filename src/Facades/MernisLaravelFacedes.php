<?php

namespace DigitalCoreHub\Mernis\Facedes;

use Illuminate\Support\Facades\Facade;

class MernisLaravelFacedes extends Facede
{
    protected static function getFacadeAccessor()
    {
        return 'mernis';
    }
}
