<?php

require_once __DIR__.'/../vendor/autoload.php';

use Binance\Client\DerivativesTradingPortfolioMargin\Api\DerivativesTradingPortfolioMarginRestApi;
use Binance\Client\DerivativesTradingPortfolioMargin\DerivativesTradingPortfolioMarginRestApiUtil;
use Binance\Client\DerivativesTradingPortfolioMargin\Model\NewCmOrderRequest;
use Binance\Client\DerivativesTradingPortfolioMargin\Model\OrderType;
use Binance\Client\DerivativesTradingPortfolioMargin\Model\Side;

function newCmOrderExample()
{
    $configurationBuilder = DerivativesTradingPortfolioMarginRestApiUtil::getConfigurationBuilder();
    $configurationBuilder->apiKey('apiKey')->privateKey('file:///path/to/private.key');
    $api = new DerivativesTradingPortfolioMarginRestApi($configurationBuilder->build());
    $newCmOrderRequest = new NewCmOrderRequest();
    $newCmOrderRequest->setSymbol('BTCUSDT');
    $newCmOrderRequest->setSide(Side::BUY);
    $newCmOrderRequest->setType(OrderType::STOP);
    $response = $api->newCmOrder($newCmOrderRequest);
    print_r($response);
}

newCmOrderExample();
