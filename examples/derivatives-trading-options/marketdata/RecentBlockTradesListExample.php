<?php

require_once __DIR__.'/../vendor/autoload.php';

use Binance\Client\DerivativesTradingOptions\Api\DerivativesTradingOptionsRestApi;
use Binance\Client\DerivativesTradingOptions\DerivativesTradingOptionsRestApiUtil;

function recentBlockTradesListExample()
{
    $configurationBuilder = DerivativesTradingOptionsRestApiUtil::getConfigurationBuilder();
    $api = new DerivativesTradingOptionsRestApi($configurationBuilder->build());
    $symbol = 'BTC-200730-9000-C';
    $limit = 20;
    $response = $api->recentBlockTradesList($symbol, $limit);
    print_r($response);
}

recentBlockTradesListExample();
