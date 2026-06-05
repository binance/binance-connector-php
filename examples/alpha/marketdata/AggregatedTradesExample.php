<?php

require_once __DIR__.'/../vendor/autoload.php';

use Binance\Client\Alpha\AlphaRestApiUtil;
use Binance\Client\Alpha\Api\AlphaRestApi;

function aggregatedTradesExample()
{
    $configurationBuilder = AlphaRestApiUtil::getConfigurationBuilder();
    $api = new AlphaRestApi($configurationBuilder->build());
    $symbol = '';
    $fromId = 1;
    $startTime = 1623319461670;
    $endTime = 1641782889000;
    $limit = 500;
    $response = $api->aggregatedTrades($symbol, $fromId, $startTime, $endTime, $limit);
    print_r($response);
}

aggregatedTradesExample();
