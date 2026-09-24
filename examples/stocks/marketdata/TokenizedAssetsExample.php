<?php

require_once __DIR__.'/../vendor/autoload.php';

use Binance\Client\Stocks\Api\StocksRestApi;
use Binance\Client\Stocks\StocksRestApiUtil;

function tokenizedAssetsExample()
{
    $configurationBuilder = StocksRestApiUtil::getConfigurationBuilder();
    $api = new StocksRestApi($configurationBuilder->build());
    $response = $api->tokenizedAssets();
    print_r($response);
}

tokenizedAssetsExample();
