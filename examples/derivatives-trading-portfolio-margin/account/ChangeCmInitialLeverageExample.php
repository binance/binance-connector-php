<?php

require_once __DIR__.'/../vendor/autoload.php';

use Binance\Client\DerivativesTradingPortfolioMargin\Api\DerivativesTradingPortfolioMarginRestApi;
use Binance\Client\DerivativesTradingPortfolioMargin\DerivativesTradingPortfolioMarginRestApiUtil;
use Binance\Client\DerivativesTradingPortfolioMargin\Model\ChangeCmInitialLeverageRequest;

function changeCmInitialLeverageExample()
{
    $configurationBuilder = DerivativesTradingPortfolioMarginRestApiUtil::getConfigurationBuilder();
    $configurationBuilder->apiKey('apiKey')->privateKey('file:///path/to/private.key');
    $api = new DerivativesTradingPortfolioMarginRestApi($configurationBuilder->build());
    $changeCmInitialLeverageRequest = new ChangeCmInitialLeverageRequest();
    $changeCmInitialLeverageRequest->setSymbol('');
    $changeCmInitialLeverageRequest->setLeverage(null);
    $response = $api->changeCmInitialLeverage($changeCmInitialLeverageRequest);
    print_r($response);
}

changeCmInitialLeverageExample();
