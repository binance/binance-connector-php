<?php

require_once __DIR__.'/../vendor/autoload.php';

use Binance\Client\Alpha\AlphaRestApiUtil;
use Binance\Client\Alpha\Api\AlphaRestApi;

function aggregatedTradesExample()
{
    $configurationBuilder = AlphaRestApiUtil::getConfigurationBuilder();
    $api = new AlphaRestApi($configurationBuilder->build());
    $symbol = 'ALPHA_118USDC';
    $fromId = 58470;
    $startTime = 1752568680000;
    $endTime = 1752572280000;
    $limit = 500;
    $response = $api->aggregatedTrades($symbol, $fromId, $startTime, $endTime, $limit);
    print_r($response);
}

aggregatedTradesExample();
