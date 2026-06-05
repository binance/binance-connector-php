<?php

require_once __DIR__.'/../vendor/autoload.php';

use Binance\Client\DerivativesTradingPortfolioMarginPro\Api\DerivativesTradingPortfolioMarginProRestApi;
use Binance\Client\DerivativesTradingPortfolioMarginPro\DerivativesTradingPortfolioMarginProRestApiUtil;
use Binance\Client\DerivativesTradingPortfolioMarginPro\Model\SwitchDeltaModeRequest;

function switchDeltaModeExample()
{
    $configurationBuilder = DerivativesTradingPortfolioMarginProRestApiUtil::getConfigurationBuilder();
    $configurationBuilder->apiKey('apiKey')->privateKey('file:///path/to/private.key');
    $api = new DerivativesTradingPortfolioMarginProRestApi($configurationBuilder->build());
    $switchDeltaModeRequest = new SwitchDeltaModeRequest();
    $switchDeltaModeRequest->setDeltaEnabled('');
    $response = $api->switchDeltaMode($switchDeltaModeRequest);
    print_r($response);
}

switchDeltaModeExample();
