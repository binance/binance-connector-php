<?php

require_once __DIR__.'/../vendor/autoload.php';

use Binance\Client\DerivativesTradingUsdsFutures\Api\DerivativesTradingUsdsFuturesRestApi;
use Binance\Client\DerivativesTradingUsdsFutures\DerivativesTradingUsdsFuturesRestApiUtil;
use Binance\Client\DerivativesTradingUsdsFutures\Model\FuturesTradfiPerpsContractRequest;

function futuresTradfiPerpsContractExample()
{
    $configurationBuilder = DerivativesTradingUsdsFuturesRestApiUtil::getConfigurationBuilder();
    $configurationBuilder->apiKey('apiKey')->privateKey('file:///path/to/private.key');
    $api = new DerivativesTradingUsdsFuturesRestApi($configurationBuilder->build());
    $futuresTradfiPerpsContractRequest = new FuturesTradfiPerpsContractRequest();
    $api->futuresTradfiPerpsContract($futuresTradfiPerpsContractRequest);
}

futuresTradfiPerpsContractExample();
