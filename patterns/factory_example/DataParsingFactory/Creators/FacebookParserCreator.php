<?php

namespace App\Services\Advertising\ParsingData;

use App\Services\Advertising\AbstractClasses\AdSystemParser;
use App\Services\Advertising\Interfaces\AdSystemParseData;

class FacebookParserCreator extends AdSystemParser
{
    public function getAdSystem(): AdSystemParseData
    {
        return new FacebookParser();
    }
}