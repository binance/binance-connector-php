<?php

require_once __DIR__.'/../vendor/autoload.php';

use Binance\Client\DerivativesTradingOptions\Api\DerivativesTradingOptionsRestApi;
use Binance\Client\DerivativesTradingOptions\DerivativesTradingOptionsRestApiUtil;
use Binance\Client\DerivativesTradingOptions\Model\ResetMarketMakerProtectionConfigRequest;

function resetMarketMakerProtectionConfigExample()
{
    $configurationBuilder = DerivativesTradingOptionsRestApiUtil::getConfigurationBuilder();
    $configurationBuilder->apiKey('apiKey')->privateKey('file:///path/to/private.key');
    $api = new DerivativesTradingOptionsRestApi($configurationBuilder->build());
    $resetMarketMakerProtectionConfigRequest = new ResetMarketMakerProtectionConfigRequest();
    $response = $api->resetMarketMakerProtectionConfig($resetMarketMakerProtectionConfigRequest);
    print_r($response);
}

resetMarketMakerProtectionConfigExample();
