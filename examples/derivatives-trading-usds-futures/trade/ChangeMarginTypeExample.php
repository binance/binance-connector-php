<?php

require_once __DIR__.'/../vendor/autoload.php';

use Binance\Client\DerivativesTradingUsdsFutures\Api\DerivativesTradingUsdsFuturesRestApi;
use Binance\Client\DerivativesTradingUsdsFutures\DerivativesTradingUsdsFuturesRestApiUtil;
use Binance\Client\DerivativesTradingUsdsFutures\Model\ChangeMarginTypeRequest;
use Binance\Client\DerivativesTradingUsdsFutures\Model\MarginType;

function changeMarginTypeExample()
{
    $configurationBuilder = DerivativesTradingUsdsFuturesRestApiUtil::getConfigurationBuilder();
    $configurationBuilder->apiKey('apiKey')->privateKey('file:///path/to/private.key');
    $api = new DerivativesTradingUsdsFuturesRestApi($configurationBuilder->build());
    $changeMarginTypeRequest = new ChangeMarginTypeRequest();
    $changeMarginTypeRequest->setSymbol('');
    $changeMarginTypeRequest->setMarginType(MarginType::ISOLATED);
    $response = $api->changeMarginType($changeMarginTypeRequest);
    print_r($response);
}

changeMarginTypeExample();
