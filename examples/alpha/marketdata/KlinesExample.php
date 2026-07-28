<?php

require_once __DIR__.'/../vendor/autoload.php';

use Binance\Client\Alpha\AlphaRestApiUtil;
use Binance\Client\Alpha\Api\AlphaRestApi;
use Binance\Client\Alpha\Model\Interval;

function klinesExample()
{
    $configurationBuilder = AlphaRestApiUtil::getConfigurationBuilder();
    $api = new AlphaRestApi($configurationBuilder->build());
    $symbol = 'ALPHA_175USDT';
    $interval = Interval::INTERVAL_1S;
    $limit = 500;
    $startTime = 1752642000000;
    $endTime = 1752645599999;
    $response = $api->klines($symbol, $interval, $limit, $startTime, $endTime);
    print_r($response);
}

klinesExample();
