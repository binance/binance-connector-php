<?php

require_once __DIR__.'/../vendor/autoload.php';

use Binance\Client\Spot\Api\SpotRestApi;
use Binance\Client\Spot\Model\SymbolStatus;
use Binance\Client\Spot\Model\TickerType;
use Binance\Client\Spot\Model\WindowSize;
use Binance\Client\Spot\SpotRestApiUtil;

function tickerExample()
{
    $configurationBuilder = SpotRestApiUtil::getConfigurationBuilder();
    $api = new SpotRestApi($configurationBuilder->build());
    $symbol = 'BNBUSDT';
    $symbols = null;
    $windowSize = WindowSize::WINDOW_SIZE_1M;
    $type = TickerType::FULL;
    $symbolStatus = SymbolStatus::TRADING;
    $response = $api->ticker($symbol, $symbols, $windowSize, $type, $symbolStatus);
    print_r($response);
}

tickerExample();
