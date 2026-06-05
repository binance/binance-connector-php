<?php

require_once __DIR__.'/../vendor/autoload.php';

use Binance\Client\Alpha\AlphaRestApiUtil;
use Binance\Client\Alpha\Api\AlphaRestApi;

function klinesExample()
{
    $configurationBuilder = AlphaRestApiUtil::getConfigurationBuilder();
    $api = new AlphaRestApi($configurationBuilder->build());
    $symbol = '';
    $interval = '';
    $limit = 500;
    $startTime = 1623319461670;
    $endTime = 1641782889000;
    $response = $api->klines($symbol, $interval, $limit, $startTime, $endTime);
    print_r($response);
}

klinesExample();
