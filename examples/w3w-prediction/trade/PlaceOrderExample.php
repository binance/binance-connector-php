<?php

require_once __DIR__.'/../vendor/autoload.php';

use Binance\Client\W3WPrediction\Api\W3WPredictionRestApi;
use Binance\Client\W3WPrediction\Model\AccountType;
use Binance\Client\W3WPrediction\Model\OrderType;
use Binance\Client\W3WPrediction\Model\PlaceOrderRequest;
use Binance\Client\W3WPrediction\W3WPredictionRestApiUtil;

function placeOrderExample()
{
    $configurationBuilder = W3WPredictionRestApiUtil::getConfigurationBuilder();
    $configurationBuilder->apiKey('apiKey')->privateKey('file:///path/to/private.key');
    $api = new W3WPredictionRestApi($configurationBuilder->build());
    $placeOrderRequest = new PlaceOrderRequest();
    $placeOrderRequest->setWalletAddress('0x12e32db8817e292508c34111cbc4b23340df542c');
    $placeOrderRequest->setWalletId('5b5c1ec3be4e4416a5872b21c1ca5d20');
    $placeOrderRequest->setQuoteId('q_20260525_abc123xyz');
    $placeOrderRequest->setTimeInForce('FOK');
    $placeOrderRequest->setAccountType(AccountType::SPOT);
    $placeOrderRequest->setOrderType(OrderType::MARKET);
    $placeOrderRequest->setSlippageBps(1200);
    $response = $api->placeOrder($placeOrderRequest);
    print_r($response);
}

placeOrderExample();
