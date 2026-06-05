<?php

require_once __DIR__.'/../vendor/autoload.php';

use Binance\Client\Spot\Api\SpotRestApi;
use Binance\Client\Spot\Model\Interval;
use Binance\Client\Spot\SpotRestApiUtil;

function uiKlinesExample()
{
    $configurationBuilder = SpotRestApiUtil::getConfigurationBuilder();
    $api = new SpotRestApi($configurationBuilder->build());
    $symbol = 'BNBUSDT';
    $interval = Interval::INTERVAL_1S;
    $startTime = 1735693200000;
    $endTime = 1735693200000;
    $timeZone = '';
    $limit = 500;
    $response = $api->uiKlines($symbol, $interval, $startTime, $endTime, $timeZone, $limit);
    print_r($response);
}

uiKlinesExample();
