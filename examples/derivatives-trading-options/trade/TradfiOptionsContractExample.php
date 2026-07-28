<?php

require_once __DIR__.'/../vendor/autoload.php';

use Binance\Client\DerivativesTradingOptions\Api\DerivativesTradingOptionsRestApi;
use Binance\Client\DerivativesTradingOptions\DerivativesTradingOptionsRestApiUtil;
use Binance\Client\DerivativesTradingOptions\Model\TradfiOptionsContractRequest;

function tradfiOptionsContractExample()
{
    $configurationBuilder = DerivativesTradingOptionsRestApiUtil::getConfigurationBuilder();
    $configurationBuilder->apiKey('apiKey')->privateKey('file:///path/to/private.key');
    $api = new DerivativesTradingOptionsRestApi($configurationBuilder->build());
    $tradfiOptionsContractRequest = new TradfiOptionsContractRequest();
    $response = $api->tradfiOptionsContract($tradfiOptionsContractRequest);
    print_r($response);
}

tradfiOptionsContractExample();
