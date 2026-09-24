<?php

require_once __DIR__.'/../vendor/autoload.php';

use Binance\Client\Stocks\Api\StocksRestApi;
use Binance\Client\Stocks\StocksRestApiUtil;

function exchangeInfoExample()
{
    $configurationBuilder = StocksRestApiUtil::getConfigurationBuilder();
    $api = new StocksRestApi($configurationBuilder->build());
    $symbol = 'AAPL';
    $response = $api->exchangeInfo($symbol);
    print_r($response);
}

exchangeInfoExample();
