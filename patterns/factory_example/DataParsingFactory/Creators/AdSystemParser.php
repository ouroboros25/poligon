<?php

namespace App\Services\Advertising\AbstractClasses;

use App\Services\Advertising\Interfaces\AdSystemParseData;

abstract class AdSystemParser
{
    abstract public function getAdSystem(): AdSystemParseData;

    public function parseData() : void
    {
        $adSystem = $this->getAdSystem();
        $adSystem->parseAdSpend();
    }
}