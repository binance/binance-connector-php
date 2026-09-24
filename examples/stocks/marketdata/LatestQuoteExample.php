<?php

require_once __DIR__.'/../vendor/autoload.php';

use Binance\Client\Stocks\Api\StocksRestApi;
use Binance\Client\Stocks\StocksRestApiUtil;

function latestQuoteExample()
{
    $configurationBuilder = StocksRestApiUtil::getConfigurationBuilder();
    $api = new StocksRestApi($configurationBuilder->build());
    $symbol = 'AAPL';
    $response = $api->latestQuote($symbol);
    print_r($response);
}

latestQuoteExample();
