<?php

require_once __DIR__.'/../vendor/autoload.php';

use Binance\Client\GiftCard\Api\GiftCardRestApi;
use Binance\Client\GiftCard\GiftCardRestApiUtil;

function fetchTokenLimitExample()
{
    $configurationBuilder = GiftCardRestApiUtil::getConfigurationBuilder();
    $configurationBuilder->apiKey('apiKey')->privateKey('file:///path/to/private.key');
    $api = new GiftCardRestApi($configurationBuilder->build());
    $baseToken = '';
    $recvWindow = 5000;
    $response = $api->fetchTokenLimit($baseToken, $recvWindow);
    print_r($response);
}

fetchTokenLimitExample();
