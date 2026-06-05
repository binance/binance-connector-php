<?php

require_once __DIR__.'/../vendor/autoload.php';

use Binance\Client\DerivativesTradingPortfolioMargin\Api\DerivativesTradingPortfolioMarginRestApi;
use Binance\Client\DerivativesTradingPortfolioMargin\DerivativesTradingPortfolioMarginRestApiUtil;
use Binance\Client\DerivativesTradingPortfolioMargin\Model\NewUmAlgoOrderRequest;
use Binance\Client\DerivativesTradingPortfolioMargin\Model\Side;
use Binance\Client\DerivativesTradingPortfolioMargin\Model\Type;

function newUmAlgoOrderExample()
{
    $configurationBuilder = DerivativesTradingPortfolioMarginRestApiUtil::getConfigurationBuilder();
    $configurationBuilder->apiKey('apiKey')->privateKey('file:///path/to/private.key');
    $api = new DerivativesTradingPortfolioMarginRestApi($configurationBuilder->build());
    $newUmAlgoOrderRequest = new NewUmAlgoOrderRequest();
    $newUmAlgoOrderRequest->setAlgoType('');
    $newUmAlgoOrderRequest->setSymbol('');
    $newUmAlgoOrderRequest->setSide(Side::BUY);
    $newUmAlgoOrderRequest->setType(Type::LIMIT);
    $response = $api->newUmAlgoOrder($newUmAlgoOrderRequest);
    print_r($response);
}

newUmAlgoOrderExample();
