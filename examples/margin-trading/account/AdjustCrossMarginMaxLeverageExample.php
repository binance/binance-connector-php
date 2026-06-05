<?php

require_once __DIR__.'/../vendor/autoload.php';

use Binance\Client\MarginTrading\Api\MarginTradingRestApi;
use Binance\Client\MarginTrading\MarginTradingRestApiUtil;
use Binance\Client\MarginTrading\Model\AdjustCrossMarginMaxLeverageRequest;

function adjustCrossMarginMaxLeverageExample()
{
    $configurationBuilder = MarginTradingRestApiUtil::getConfigurationBuilder();
    $configurationBuilder->apiKey('apiKey')->privateKey('file:///path/to/private.key');
    $api = new MarginTradingRestApi($configurationBuilder->build());
    $adjustCrossMarginMaxLeverageRequest = new AdjustCrossMarginMaxLeverageRequest();
    $adjustCrossMarginMaxLeverageRequest->setMaxLeverage(null);
    $response = $api->adjustCrossMarginMaxLeverage($adjustCrossMarginMaxLeverageRequest);
    print_r($response);
}

adjustCrossMarginMaxLeverageExample();
