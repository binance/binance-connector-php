<?php

require_once __DIR__.'/../vendor/autoload.php';

use Binance\Client\MarginTrading\Api\MarginTradingRestApi;
use Binance\Client\MarginTrading\MarginTradingRestApiUtil;
use Binance\Client\MarginTrading\Model\MarginAccountBorrowRepayRequest;

function marginAccountBorrowRepayExample()
{
    $configurationBuilder = MarginTradingRestApiUtil::getConfigurationBuilder();
    $configurationBuilder->apiKey('apiKey')->privateKey('file:///path/to/private.key');
    $api = new MarginTradingRestApi($configurationBuilder->build());
    $marginAccountBorrowRepayRequest = new MarginAccountBorrowRepayRequest();
    $marginAccountBorrowRepayRequest->setAsset('');
    $marginAccountBorrowRepayRequest->setIsIsolated('false');
    $marginAccountBorrowRepayRequest->setSymbol('');
    $marginAccountBorrowRepayRequest->setAmount('');
    $marginAccountBorrowRepayRequest->setType('');
    $response = $api->marginAccountBorrowRepay($marginAccountBorrowRepayRequest);
    print_r($response);
}

marginAccountBorrowRepayExample();
