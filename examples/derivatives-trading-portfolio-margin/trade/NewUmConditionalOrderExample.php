<?php

require_once __DIR__.'/../vendor/autoload.php';

use Binance\Client\DerivativesTradingPortfolioMargin\Api\DerivativesTradingPortfolioMarginRestApi;
use Binance\Client\DerivativesTradingPortfolioMargin\DerivativesTradingPortfolioMarginRestApiUtil;
use Binance\Client\DerivativesTradingPortfolioMargin\Model\NewUmConditionalOrderRequest;
use Binance\Client\DerivativesTradingPortfolioMargin\Model\Side;
use Binance\Client\DerivativesTradingPortfolioMargin\Model\StrategyType;

function newUmConditionalOrderExample()
{
    $configurationBuilder = DerivativesTradingPortfolioMarginRestApiUtil::getConfigurationBuilder();
    $configurationBuilder->apiKey('apiKey')->privateKey('file:///path/to/private.key');
    $api = new DerivativesTradingPortfolioMarginRestApi($configurationBuilder->build());
    $newUmConditionalOrderRequest = new NewUmConditionalOrderRequest();
    $newUmConditionalOrderRequest->setSymbol('');
    $newUmConditionalOrderRequest->setSide(Side::BUY);
    $newUmConditionalOrderRequest->setStrategyType(StrategyType::STOP);
    $response = $api->newUmConditionalOrder($newUmConditionalOrderRequest);
    print_r($response);
}

newUmConditionalOrderExample();
