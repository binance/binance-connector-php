<?php

require_once __DIR__.'/../vendor/autoload.php';

use Binance\Client\Spot\Api\SpotRestApi;
use Binance\Client\Spot\Model\SymbolStatus;
use Binance\Client\Spot\SpotRestApiUtil;

function depthExample()
{
    $configurationBuilder = SpotRestApiUtil::getConfigurationBuilder();
    $api = new SpotRestApi($configurationBuilder->build());
    $symbol = 'BNBUSDT';
    $limit = 500;
    $symbolStatus = SymbolStatus::TRADING;
    $response = $api->depth($symbol, $limit, $symbolStatus);
    print_r($response);
}

depthExample();
