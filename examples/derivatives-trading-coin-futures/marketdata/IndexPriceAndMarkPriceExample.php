<?php

require_once __DIR__.'/../vendor/autoload.php';

use Binance\Client\DerivativesTradingCoinFutures\Api\DerivativesTradingCoinFuturesRestApi;
use Binance\Client\DerivativesTradingCoinFutures\DerivativesTradingCoinFuturesRestApiUtil;

function indexPriceAndMarkPriceExample()
{
    $configurationBuilder = DerivativesTradingCoinFuturesRestApiUtil::getConfigurationBuilder();
    $api = new DerivativesTradingCoinFuturesRestApi($configurationBuilder->build());
    $symbol = '';
    $pair = '';
    $response = $api->indexPriceAndMarkPrice($symbol, $pair);
    print_r($response);
}

indexPriceAndMarkPriceExample();
