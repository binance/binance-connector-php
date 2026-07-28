<?php

require_once __DIR__.'/../vendor/autoload.php';

use Binance\Client\GiftCard\Api\GiftCardRestApi;
use Binance\Client\GiftCard\GiftCardRestApiUtil;
use Binance\Client\GiftCard\Model\CreateADualTokenGiftCardRequest;

function createADualTokenGiftCardExample()
{
    $configurationBuilder = GiftCardRestApiUtil::getConfigurationBuilder();
    $configurationBuilder->apiKey('apiKey')->privateKey('file:///path/to/private.key');
    $api = new GiftCardRestApi($configurationBuilder->build());
    $createADualTokenGiftCardRequest = new CreateADualTokenGiftCardRequest();
    $createADualTokenGiftCardRequest->setBaseToken('BUSD');
    $createADualTokenGiftCardRequest->setFaceToken('BNB');
    $createADualTokenGiftCardRequest->setBaseTokenAmount(1);
    $response = $api->createADualTokenGiftCard($createADualTokenGiftCardRequest);
    print_r($response);
}

createADualTokenGiftCardExample();
