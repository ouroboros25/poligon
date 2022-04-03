<?php
namespace App\Services\Advertising\ParsingData;

use App\Services\Advertising\Interfaces\AdSystemParseData;
use Illuminate\Support\Facades\Log;

class FacebookParser implements AdSystemParseData
{
    public function parseAdSpend()
    {
        Log::info('Parse data Facebook', []);
    }
}