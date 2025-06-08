<?php

use GeoIp2\Database\Reader;
use Illuminate\Support\Facades\Http;
function getUserRealIp()
{
    $response = Http::withoutVerifying()->get('https://api64.ipify.org?format=json');

    return $response->successful() ? $response->json()['ip'] : '8.8.8.8';
}

function getCountryFromIp()
{
    $ip = request()->ip();
    if ($ip == '127.0.0.1' || $ip == '::1') {
        $ip = getUserRealIp();
    }
    $dbPath = storage_path('app/private/GeoLite2-Country.mmdb');

    if (!file_exists($dbPath)) {
        return response()->json(['error' => 'GeoIP database not found'], 401);
    }
    try {
        $reader = new Reader($dbPath);
        $record = $reader->country($ip);
        $country = $record->country;
    } catch (\Throwable $th) {
        $country = 'Unknown';
    }
    return $country;
}

function getCountryFromCode()
{
    $code = getCountryFromIp()->isoCode;
    $countryCodes = collect(json_decode(file_get_contents(resource_path('data/country-codes.json'))));
    $country = $countryCodes->firstWhere('code', $code);
    if ($country) return $country;
    return null;
}
