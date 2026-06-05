<?php

require_once __DIR__.'/../vendor/autoload.php';

use Binance\Client\GiftCard\Api\GiftCardRestApi;
use Binance\Client\GiftCard\GiftCardRestApiUtil;

function verifyBinanceGiftCardByGiftCardNumberExample()
{
    $configurationBuilder = GiftCardRestApiUtil::getConfigurationBuilder();
    $configurationBuilder->apiKey('apiKey')->privateKey('file:///path/to/private.key');
    $api = new GiftCardRestApi($configurationBuilder->build());
    $referenceNo = '';
    $recvWindow = 5000;
    $response = $api->verifyBinanceGiftCardByGiftCardNumber($referenceNo, $recvWindow);
    print_r($response);
}

verifyBinanceGiftCardByGiftCardNumberExample();
