<?php

require_once __DIR__.'/../vendor/autoload.php';

use Binance\Client\DerivativesTradingCoinFutures\Api\DerivativesTradingCoinFuturesRestApi;
use Binance\Client\DerivativesTradingCoinFutures\DerivativesTradingCoinFuturesRestApiUtil;
use Binance\Client\DerivativesTradingCoinFutures\Model\ChangeMarginTypeRequest;
use Binance\Client\DerivativesTradingCoinFutures\Model\MarginType;

function changeMarginTypeExample()
{
    $configurationBuilder = DerivativesTradingCoinFuturesRestApiUtil::getConfigurationBuilder();
    $configurationBuilder->apiKey('apiKey')->privateKey('file:///path/to/private.key');
    $api = new DerivativesTradingCoinFuturesRestApi($configurationBuilder->build());
    $changeMarginTypeRequest = new ChangeMarginTypeRequest();
    $changeMarginTypeRequest->setSymbol('');
    $changeMarginTypeRequest->setMarginType(MarginType::ISOLATED);
    $response = $api->changeMarginType($changeMarginTypeRequest);
    print_r($response);
}

changeMarginTypeExample();
