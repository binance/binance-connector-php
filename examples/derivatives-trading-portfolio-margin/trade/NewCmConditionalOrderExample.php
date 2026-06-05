<?php

require_once __DIR__.'/../vendor/autoload.php';

use Binance\Client\DerivativesTradingPortfolioMargin\Api\DerivativesTradingPortfolioMarginRestApi;
use Binance\Client\DerivativesTradingPortfolioMargin\DerivativesTradingPortfolioMarginRestApiUtil;
use Binance\Client\DerivativesTradingPortfolioMargin\Model\NewCmConditionalOrderRequest;
use Binance\Client\DerivativesTradingPortfolioMargin\Model\Side;
use Binance\Client\DerivativesTradingPortfolioMargin\Model\StrategyType;

function newCmConditionalOrderExample()
{
    $configurationBuilder = DerivativesTradingPortfolioMarginRestApiUtil::getConfigurationBuilder();
    $configurationBuilder->apiKey('apiKey')->privateKey('file:///path/to/private.key');
    $api = new DerivativesTradingPortfolioMarginRestApi($configurationBuilder->build());
    $newCmConditionalOrderRequest = new NewCmConditionalOrderRequest();
    $newCmConditionalOrderRequest->setSymbol('');
    $newCmConditionalOrderRequest->setSide(Side::BUY);
    $newCmConditionalOrderRequest->setStrategyType(StrategyType::STOP);
    $response = $api->newCmConditionalOrder($newCmConditionalOrderRequest);
    print_r($response);
}

newCmConditionalOrderExample();
