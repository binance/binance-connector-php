<?php

require_once __DIR__.'/../vendor/autoload.php';

use Binance\Client\Spot\Api\SpotRestApi;
use Binance\Client\Spot\Model\SymbolStatus;
use Binance\Client\Spot\Model\TickerType;
use Binance\Client\Spot\SpotRestApiUtil;

function ticker24hrExample()
{
    $configurationBuilder = SpotRestApiUtil::getConfigurationBuilder();
    $api = new SpotRestApi($configurationBuilder->build());
    $symbol = 'BNBUSDT';
    $symbols = null;
    $type = TickerType::FULL;
    $symbolStatus = SymbolStatus::TRADING;
    $response = $api->ticker24hr($symbol, $symbols, $type, $symbolStatus);
    print_r($response);
}

ticker24hrExample();
