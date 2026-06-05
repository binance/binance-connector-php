<?php

require_once __DIR__.'/../vendor/autoload.php';

use Binance\Client\DerivativesTradingPortfolioMargin\Api\DerivativesTradingPortfolioMarginRestApi;
use Binance\Client\DerivativesTradingPortfolioMargin\DerivativesTradingPortfolioMarginRestApiUtil;
use Binance\Client\DerivativesTradingPortfolioMargin\Model\NewCmOrderRequest;
use Binance\Client\DerivativesTradingPortfolioMargin\Model\Side;
use Binance\Client\DerivativesTradingPortfolioMargin\Model\Type;

function newCmOrderExample()
{
    $configurationBuilder = DerivativesTradingPortfolioMarginRestApiUtil::getConfigurationBuilder();
    $configurationBuilder->apiKey('apiKey')->privateKey('file:///path/to/private.key');
    $api = new DerivativesTradingPortfolioMarginRestApi($configurationBuilder->build());
    $newCmOrderRequest = new NewCmOrderRequest();
    $newCmOrderRequest->setSymbol('');
    $newCmOrderRequest->setSide(Side::BUY);
    $newCmOrderRequest->setType(Type::LIMIT);
    $response = $api->newCmOrder($newCmOrderRequest);
    print_r($response);
}

newCmOrderExample();
