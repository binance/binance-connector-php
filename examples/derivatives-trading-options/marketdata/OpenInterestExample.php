<?php

require_once __DIR__.'/../vendor/autoload.php';

use Binance\Client\DerivativesTradingOptions\Api\DerivativesTradingOptionsRestApi;
use Binance\Client\DerivativesTradingOptions\DerivativesTradingOptionsRestApiUtil;

function openInterestExample()
{
    $configurationBuilder = DerivativesTradingOptionsRestApiUtil::getConfigurationBuilder();
    $api = new DerivativesTradingOptionsRestApi($configurationBuilder->build());
    $underlyingAsset = '';
    $expiration = '';
    $response = $api->openInterest($underlyingAsset, $expiration);
    print_r($response);
}

openInterestExample();
