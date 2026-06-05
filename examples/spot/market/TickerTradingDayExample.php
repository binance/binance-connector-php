<?php

require_once __DIR__.'/../vendor/autoload.php';

use Binance\Client\Spot\Api\SpotRestApi;
use Binance\Client\Spot\Model\SymbolStatus;
use Binance\Client\Spot\Model\TickerType;
use Binance\Client\Spot\SpotRestApiUtil;

function tickerTradingDayExample()
{
    $configurationBuilder = SpotRestApiUtil::getConfigurationBuilder();
    $api = new SpotRestApi($configurationBuilder->build());
    $symbol = 'BNBUSDT';
    $symbols = null;
    $timeZone = '';
    $type = TickerType::FULL;
    $symbolStatus = SymbolStatus::TRADING;
    $response = $api->tickerTradingDay($symbol, $symbols, $timeZone, $type, $symbolStatus);
    print_r($response);
}

tickerTradingDayExample();
