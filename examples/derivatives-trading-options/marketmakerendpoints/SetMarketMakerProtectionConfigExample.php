<?php

require_once __DIR__.'/../vendor/autoload.php';

use Binance\Client\DerivativesTradingOptions\Api\DerivativesTradingOptionsRestApi;
use Binance\Client\DerivativesTradingOptions\DerivativesTradingOptionsRestApiUtil;
use Binance\Client\DerivativesTradingOptions\Model\SetMarketMakerProtectionConfigRequest;

function setMarketMakerProtectionConfigExample()
{
    $configurationBuilder = DerivativesTradingOptionsRestApiUtil::getConfigurationBuilder();
    $configurationBuilder->apiKey('apiKey')->privateKey('file:///path/to/private.key');
    $api = new DerivativesTradingOptionsRestApi($configurationBuilder->build());
    $setMarketMakerProtectionConfigRequest = new SetMarketMakerProtectionConfigRequest();
    $response = $api->setMarketMakerProtectionConfig($setMarketMakerProtectionConfigRequest);
    print_r($response);
}

setMarketMakerProtectionConfigExample();
