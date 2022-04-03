<?php
namespace App\Services\Advertising\ParsingData;

use App\Services\Advertising\Interfaces\AdSystemParseData;
use Illuminate\Support\Facades\Log;

class GoogleParser implements AdSystemParseData
{
    public function parseAdSpend()
    {
        Log::info('Parse data Google', []);
    }
}