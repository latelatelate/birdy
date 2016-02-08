<?php namespace NM\Birdy;

use Illuminate\Support\Facades\Facade;

class Birdy extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor() { return 'Codebird'; }
}