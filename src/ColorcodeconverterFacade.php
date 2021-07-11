<?php

namespace PBDP\Colorcodeconverter;

use Illuminate\Support\Facades\Facade;

/**
 * @see \PBDP\Colorcodeconverter\Skeleton\SkeletonClass
 */
class ColorcodeconverterFacade extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'colorcodeconverter';
    }
}
