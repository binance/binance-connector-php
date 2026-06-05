<?php

require_once __DIR__.'/../vendor/autoload.php';

use Binance\Client\DerivativesTradingPortfolioMargin\Api\DerivativesTradingPortfolioMarginRestApi;
use Binance\Client\DerivativesTradingPortfolioMargin\DerivativesTradingPortfolioMarginRestApiUtil;
use Binance\Client\DerivativesTradingPortfolioMargin\Model\NewUmOrderRequest;
use Binance\Client\DerivativesTradingPortfolioMargin\Model\Side;
use Binance\Client\DerivativesTradingPortfolioMargin\Model\Type;

function newUmOrderExample()
{
    $configurationBuilder = DerivativesTradingPortfolioMarginRestApiUtil::getConfigurationBuilder();
    $configurationBuilder->apiKey('apiKey')->privateKey('file:///path/to/private.key');
    $api = new DerivativesTradingPortfolioMarginRestApi($configurationBuilder->build());
    $newUmOrderRequest = new NewUmOrderRequest();
    $newUmOrderRequest->setSymbol('');
    $newUmOrderRequest->setSide(Side::BUY);
    $newUmOrderRequest->setType(Type::LIMIT);
    $response = $api->newUmOrder($newUmOrderRequest);
    print_r($response);
}

newUmOrderExample();
