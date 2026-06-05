<?php

require_once __DIR__.'/../vendor/autoload.php';

use Binance\Client\DerivativesTradingPortfolioMarginPro\Api\DerivativesTradingPortfolioMarginProRestApi;
use Binance\Client\DerivativesTradingPortfolioMarginPro\DerivativesTradingPortfolioMarginProRestApiUtil;
use Binance\Client\DerivativesTradingPortfolioMarginPro\Model\SetMarginCallLevelRequest;

function setMarginCallLevelExample()
{
    $configurationBuilder = DerivativesTradingPortfolioMarginProRestApiUtil::getConfigurationBuilder();
    $configurationBuilder->apiKey('apiKey')->privateKey('file:///path/to/private.key');
    $api = new DerivativesTradingPortfolioMarginProRestApi($configurationBuilder->build());
    $setMarginCallLevelRequest = new SetMarginCallLevelRequest();
    $setMarginCallLevelRequest->setMarginCallLevel(5000.0);
    $response = $api->setMarginCallLevel($setMarginCallLevelRequest);
    print_r($response);
}

setMarginCallLevelExample();
