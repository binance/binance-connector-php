<?php

require_once __DIR__.'/../vendor/autoload.php';

use Binance\Client\Spot\Api\SpotRestApi;
use Binance\Client\Spot\Model\SymbolStatus;
use Binance\Client\Spot\SpotRestApiUtil;

function exchangeInfoExample()
{
    $configurationBuilder = SpotRestApiUtil::getConfigurationBuilder();
    $api = new SpotRestApi($configurationBuilder->build());
    $symbol = 'ETHBTC';
    $symbols = ['BTCUSDT', 'BNBUSDT'];
    $permissions = ['SPOT'];
    $showPermissionSets = false;
    $symbolStatus = SymbolStatus::TRADING;
    $response = $api->exchangeInfo($symbol, $symbols, $permissions, $showPermissionSets, $symbolStatus);
    print_r($response);
}

exchangeInfoExample();
