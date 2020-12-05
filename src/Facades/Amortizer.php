<?php
namespace Hapu\LoanAmortizer\Facades;

use Illuminate\Support\Facades\Facade;

class Amortizer extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'amortizer';
    }
}
