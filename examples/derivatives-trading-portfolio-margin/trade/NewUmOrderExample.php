<?php

require_once __DIR__.'/../vendor/autoload.php';

use Binance\Client\DerivativesTradingPortfolioMargin\Api\DerivativesTradingPortfolioMarginRestApi;
use Binance\Client\DerivativesTradingPortfolioMargin\DerivativesTradingPortfolioMarginRestApiUtil;
use Binance\Client\DerivativesTradingPortfolioMargin\Model\NewUmOrderRequest;
use Binance\Client\DerivativesTradingPortfolioMargin\Model\OrderType;
use Binance\Client\DerivativesTradingPortfolioMargin\Model\Side;

function newUmOrderExample()
{
    $configurationBuilder = DerivativesTradingPortfolioMarginRestApiUtil::getConfigurationBuilder();
    $configurationBuilder->apiKey('apiKey')->privateKey('file:///path/to/private.key');
    $api = new DerivativesTradingPortfolioMarginRestApi($configurationBuilder->build());
    $newUmOrderRequest = new NewUmOrderRequest();
    $newUmOrderRequest->setSymbol('BTCUSDT');
    $newUmOrderRequest->setSide(Side::BUY);
    $newUmOrderRequest->setType(OrderType::STOP);
    $response = $api->newUmOrder($newUmOrderRequest);
    print_r($response);
}

newUmOrderExample();
