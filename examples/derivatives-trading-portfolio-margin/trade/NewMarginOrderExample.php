<?php

require_once __DIR__.'/../vendor/autoload.php';

use Binance\Client\DerivativesTradingPortfolioMargin\Api\DerivativesTradingPortfolioMarginRestApi;
use Binance\Client\DerivativesTradingPortfolioMargin\DerivativesTradingPortfolioMarginRestApiUtil;
use Binance\Client\DerivativesTradingPortfolioMargin\Model\NewMarginOrderRequest;
use Binance\Client\DerivativesTradingPortfolioMargin\Model\Side;
use Binance\Client\DerivativesTradingPortfolioMargin\Model\Type;

function newMarginOrderExample()
{
    $configurationBuilder = DerivativesTradingPortfolioMarginRestApiUtil::getConfigurationBuilder();
    $configurationBuilder->apiKey('apiKey')->privateKey('file:///path/to/private.key');
    $api = new DerivativesTradingPortfolioMarginRestApi($configurationBuilder->build());
    $newMarginOrderRequest = new NewMarginOrderRequest();
    $newMarginOrderRequest->setSymbol('');
    $newMarginOrderRequest->setSide(Side::BUY);
    $newMarginOrderRequest->setType(Type::LIMIT);
    $response = $api->newMarginOrder($newMarginOrderRequest);
    print_r($response);
}

newMarginOrderExample();
