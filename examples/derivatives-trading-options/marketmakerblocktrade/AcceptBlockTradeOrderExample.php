<?php

require_once __DIR__.'/../vendor/autoload.php';

use Binance\Client\DerivativesTradingOptions\Api\DerivativesTradingOptionsRestApi;
use Binance\Client\DerivativesTradingOptions\DerivativesTradingOptionsRestApiUtil;
use Binance\Client\DerivativesTradingOptions\Model\AcceptBlockTradeOrderRequest;

function acceptBlockTradeOrderExample()
{
    $configurationBuilder = DerivativesTradingOptionsRestApiUtil::getConfigurationBuilder();
    $configurationBuilder->apiKey('apiKey')->privateKey('file:///path/to/private.key');
    $api = new DerivativesTradingOptionsRestApi($configurationBuilder->build());
    $acceptBlockTradeOrderRequest = new AcceptBlockTradeOrderRequest();
    $acceptBlockTradeOrderRequest->setBlockOrderMatchingKey('');
    $response = $api->acceptBlockTradeOrder($acceptBlockTradeOrderRequest);
    print_r($response);
}

acceptBlockTradeOrderExample();
