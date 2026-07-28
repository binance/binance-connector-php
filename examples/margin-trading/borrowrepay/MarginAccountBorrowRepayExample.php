<?php

require_once __DIR__.'/../vendor/autoload.php';

use Binance\Client\MarginTrading\Api\MarginTradingRestApi;
use Binance\Client\MarginTrading\MarginTradingRestApiUtil;
use Binance\Client\MarginTrading\Model\IsIsolated;
use Binance\Client\MarginTrading\Model\MarginAccountBorrowRepayRequest;
use Binance\Client\MarginTrading\Model\OrderType;

function marginAccountBorrowRepayExample()
{
    $configurationBuilder = MarginTradingRestApiUtil::getConfigurationBuilder();
    $configurationBuilder->apiKey('apiKey')->privateKey('file:///path/to/private.key');
    $api = new MarginTradingRestApi($configurationBuilder->build());
    $marginAccountBorrowRepayRequest = new MarginAccountBorrowRepayRequest();
    $marginAccountBorrowRepayRequest->setAsset('USDT');
    $marginAccountBorrowRepayRequest->setIsIsolated(IsIsolated::TRUE);
    $marginAccountBorrowRepayRequest->setAmount('1.0');
    $marginAccountBorrowRepayRequest->setType(OrderType::ROLL_IN);
    $response = $api->marginAccountBorrowRepay($marginAccountBorrowRepayRequest);
    print_r($response);
}

marginAccountBorrowRepayExample();
