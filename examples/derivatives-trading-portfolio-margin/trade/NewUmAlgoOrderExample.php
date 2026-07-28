<?php

require_once __DIR__.'/../vendor/autoload.php';

use Binance\Client\DerivativesTradingPortfolioMargin\Api\DerivativesTradingPortfolioMarginRestApi;
use Binance\Client\DerivativesTradingPortfolioMargin\DerivativesTradingPortfolioMarginRestApiUtil;
use Binance\Client\DerivativesTradingPortfolioMargin\Model\AlgoType;
use Binance\Client\DerivativesTradingPortfolioMargin\Model\NewUmAlgoOrderRequest;
use Binance\Client\DerivativesTradingPortfolioMargin\Model\OrderType;
use Binance\Client\DerivativesTradingPortfolioMargin\Model\Side;

function newUmAlgoOrderExample()
{
    $configurationBuilder = DerivativesTradingPortfolioMarginRestApiUtil::getConfigurationBuilder();
    $configurationBuilder->apiKey('apiKey')->privateKey('file:///path/to/private.key');
    $api = new DerivativesTradingPortfolioMarginRestApi($configurationBuilder->build());
    $newUmAlgoOrderRequest = new NewUmAlgoOrderRequest();
    $newUmAlgoOrderRequest->setAlgoType(AlgoType::CONDITIONAL);
    $newUmAlgoOrderRequest->setSymbol('BNBUSDT');
    $newUmAlgoOrderRequest->setSide(Side::BUY);
    $newUmAlgoOrderRequest->setType(OrderType::STOP);
    $newUmAlgoOrderRequest->setQuantity(0.01);
    $response = $api->newUmAlgoOrder($newUmAlgoOrderRequest);
    print_r($response);
}

newUmAlgoOrderExample();
