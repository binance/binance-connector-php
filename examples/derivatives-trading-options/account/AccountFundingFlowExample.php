<?php

require_once __DIR__.'/../vendor/autoload.php';

use Binance\Client\DerivativesTradingOptions\Api\DerivativesTradingOptionsRestApi;
use Binance\Client\DerivativesTradingOptions\DerivativesTradingOptionsRestApiUtil;
use Binance\Client\DerivativesTradingOptions\Model\Currency;

function accountFundingFlowExample()
{
    $configurationBuilder = DerivativesTradingOptionsRestApiUtil::getConfigurationBuilder();
    $configurationBuilder->apiKey('apiKey')->privateKey('file:///path/to/private.key');
    $api = new DerivativesTradingOptionsRestApi($configurationBuilder->build());
    $currency = Currency::USDT;
    $recordId = 100000;
    $startTime = 1623319461670;
    $endTime = 1641782889000;
    $limit = 20;
    $recvWindow = 5000;
    $response = $api->accountFundingFlow($currency, $recordId, $startTime, $endTime, $limit, $recvWindow);
    print_r($response);
}

accountFundingFlowExample();
