<?php

require_once __DIR__.'/../vendor/autoload.php';

use Binance\Client\DerivativesTradingPortfolioMargin\Api\DerivativesTradingPortfolioMarginRestApi;
use Binance\Client\DerivativesTradingPortfolioMargin\DerivativesTradingPortfolioMarginRestApiUtil;

function cancelMarginAccountOrderExample()
{
    $configurationBuilder = DerivativesTradingPortfolioMarginRestApiUtil::getConfigurationBuilder();
    $configurationBuilder->apiKey('apiKey')->privateKey('file:///path/to/private.key');
    $api = new DerivativesTradingPortfolioMarginRestApi($configurationBuilder->build());
    $symbol = '';
    $orderId = 1;
    $origClientOrderId = '1';
    $newClientOrderId = '1';
    $recvWindow = 5000;
    $response = $api->cancelMarginAccountOrder($symbol, $orderId, $origClientOrderId, $newClientOrderId, $recvWindow);
    print_r($response);
}

cancelMarginAccountOrderExample();
