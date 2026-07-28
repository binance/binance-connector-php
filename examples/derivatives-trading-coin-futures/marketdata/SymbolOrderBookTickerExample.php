<?php

require_once __DIR__.'/../vendor/autoload.php';

use Binance\Client\DerivativesTradingCoinFutures\Api\DerivativesTradingCoinFuturesRestApi;
use Binance\Client\DerivativesTradingCoinFutures\DerivativesTradingCoinFuturesRestApiUtil;

function symbolOrderBookTickerExample()
{
    $configurationBuilder = DerivativesTradingCoinFuturesRestApiUtil::getConfigurationBuilder();
    $api = new DerivativesTradingCoinFuturesRestApi($configurationBuilder->build());
    $symbol = 'BTCUSD_200626';
    $pair = 'BTCUSD';
    $response = $api->symbolOrderBookTicker($symbol, $pair);
    print_r($response);
}

symbolOrderBookTickerExample();
