<?php

require_once __DIR__.'/../vendor/autoload.php';

use Binance\Client\GiftCard\Api\GiftCardRestApi;
use Binance\Client\GiftCard\GiftCardRestApiUtil;

function fetchRsaPublicKeyExample()
{
    $configurationBuilder = GiftCardRestApiUtil::getConfigurationBuilder();
    $configurationBuilder->apiKey('apiKey')->privateKey('file:///path/to/private.key');
    $api = new GiftCardRestApi($configurationBuilder->build());
    $recvWindow = 5000;
    $response = $api->fetchRsaPublicKey($recvWindow);
    print_r($response);
}

fetchRsaPublicKeyExample();
