<?php

require_once __DIR__.'/../vendor/autoload.php';

use Binance\Client\Spot\Api\SpotRestApi;
use Binance\Client\Spot\Model\SymbolStatus;
use Binance\Client\Spot\SpotRestApiUtil;

function tickerPriceExample()
{
    $configurationBuilder = SpotRestApiUtil::getConfigurationBuilder();
    $api = new SpotRestApi($configurationBuilder->build());
    $symbol = 'BNBUSDT';
    $symbols = null;
    $symbolStatus = SymbolStatus::TRADING;
    $response = $api->tickerPrice($symbol, $symbols, $symbolStatus);
    print_r($response);
}

tickerPriceExample();
