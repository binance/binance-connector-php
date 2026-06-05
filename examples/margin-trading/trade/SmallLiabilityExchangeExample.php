<?php

require_once __DIR__.'/../vendor/autoload.php';

use Binance\Client\MarginTrading\Api\MarginTradingRestApi;
use Binance\Client\MarginTrading\MarginTradingRestApiUtil;
use Binance\Client\MarginTrading\Model\SmallLiabilityExchangeRequest;

function smallLiabilityExchangeExample()
{
    $configurationBuilder = MarginTradingRestApiUtil::getConfigurationBuilder();
    $configurationBuilder->apiKey('apiKey')->privateKey('file:///path/to/private.key');
    $api = new MarginTradingRestApi($configurationBuilder->build());
    $smallLiabilityExchangeRequest = new SmallLiabilityExchangeRequest();
    $smallLiabilityExchangeRequest->setAssetNames(null);
    $api->smallLiabilityExchange($smallLiabilityExchangeRequest);
}

smallLiabilityExchangeExample();
