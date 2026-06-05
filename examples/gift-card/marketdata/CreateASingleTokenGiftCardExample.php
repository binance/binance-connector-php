<?php

require_once __DIR__.'/../vendor/autoload.php';

use Binance\Client\GiftCard\Api\GiftCardRestApi;
use Binance\Client\GiftCard\GiftCardRestApiUtil;
use Binance\Client\GiftCard\Model\CreateASingleTokenGiftCardRequest;

function createASingleTokenGiftCardExample()
{
    $configurationBuilder = GiftCardRestApiUtil::getConfigurationBuilder();
    $configurationBuilder->apiKey('apiKey')->privateKey('file:///path/to/private.key');
    $api = new GiftCardRestApi($configurationBuilder->build());
    $createASingleTokenGiftCardRequest = new CreateASingleTokenGiftCardRequest();
    $createASingleTokenGiftCardRequest->setToken('');
    $createASingleTokenGiftCardRequest->setAmount(1.0);
    $response = $api->createASingleTokenGiftCard($createASingleTokenGiftCardRequest);
    print_r($response);
}

createASingleTokenGiftCardExample();
