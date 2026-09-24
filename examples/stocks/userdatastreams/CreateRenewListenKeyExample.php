<?php

require_once __DIR__.'/../vendor/autoload.php';

use Binance\Client\Stocks\Api\StocksRestApi;
use Binance\Client\Stocks\StocksRestApiUtil;

function createRenewListenKeyExample()
{
    $configurationBuilder = StocksRestApiUtil::getConfigurationBuilder();
    $api = new StocksRestApi($configurationBuilder->build());
    $recvWindow = 5000;
    $response = $api->createRenewListenKey($recvWindow);
    print_r($response);
}

createRenewListenKeyExample();
