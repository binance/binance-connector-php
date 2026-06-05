<?php

require_once __DIR__.'/../vendor/autoload.php';

use Binance\Client\GiftCard\Api\GiftCardRestApi;
use Binance\Client\GiftCard\GiftCardRestApiUtil;
use Binance\Client\GiftCard\Model\RedeemABinanceGiftCardRequest;

function redeemABinanceGiftCardExample()
{
    $configurationBuilder = GiftCardRestApiUtil::getConfigurationBuilder();
    $configurationBuilder->apiKey('apiKey')->privateKey('file:///path/to/private.key');
    $api = new GiftCardRestApi($configurationBuilder->build());
    $redeemABinanceGiftCardRequest = new RedeemABinanceGiftCardRequest();
    $redeemABinanceGiftCardRequest->setCode('');
    $response = $api->redeemABinanceGiftCard($redeemABinanceGiftCardRequest);
    print_r($response);
}

redeemABinanceGiftCardExample();
