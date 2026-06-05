<?php

require_once __DIR__.'/../vendor/autoload.php';

use Binance\Client\DerivativesTradingPortfolioMargin\Api\DerivativesTradingPortfolioMarginRestApi;
use Binance\Client\DerivativesTradingPortfolioMargin\DerivativesTradingPortfolioMarginRestApiUtil;
use Binance\Client\DerivativesTradingPortfolioMargin\Model\ChangeUmInitialLeverageRequest;

function changeUmInitialLeverageExample()
{
    $configurationBuilder = DerivativesTradingPortfolioMarginRestApiUtil::getConfigurationBuilder();
    $configurationBuilder->apiKey('apiKey')->privateKey('file:///path/to/private.key');
    $api = new DerivativesTradingPortfolioMarginRestApi($configurationBuilder->build());
    $changeUmInitialLeverageRequest = new ChangeUmInitialLeverageRequest();
    $changeUmInitialLeverageRequest->setSymbol('');
    $changeUmInitialLeverageRequest->setLeverage(null);
    $response = $api->changeUmInitialLeverage($changeUmInitialLeverageRequest);
    print_r($response);
}

changeUmInitialLeverageExample();
