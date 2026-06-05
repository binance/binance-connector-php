<?php

require_once __DIR__.'/../vendor/autoload.php';

use Binance\Client\DerivativesTradingPortfolioMargin\Api\DerivativesTradingPortfolioMarginRestApi;
use Binance\Client\DerivativesTradingPortfolioMargin\DerivativesTradingPortfolioMarginRestApiUtil;

function queryMarginAccountOrderExample()
{
    $configurationBuilder = DerivativesTradingPortfolioMarginRestApiUtil::getConfigurationBuilder();
    $configurationBuilder->apiKey('apiKey')->privateKey('file:///path/to/private.key');
    $api = new DerivativesTradingPortfolioMarginRestApi($configurationBuilder->build());
    $symbol = '';
    $orderId = 1;
    $origClientOrderId = '1';
    $recvWindow = 5000;
    $response = $api->queryMarginAccountOrder($symbol, $orderId, $origClientOrderId, $recvWindow);
    print_r($response);
}

queryMarginAccountOrderExample();
