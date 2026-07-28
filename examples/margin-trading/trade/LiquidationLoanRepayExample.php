<?php

require_once __DIR__.'/../vendor/autoload.php';

use Binance\Client\MarginTrading\Api\MarginTradingRestApi;
use Binance\Client\MarginTrading\MarginTradingRestApiUtil;
use Binance\Client\MarginTrading\Model\LiquidationLoanRepayRequest;

function liquidationLoanRepayExample()
{
    $configurationBuilder = MarginTradingRestApiUtil::getConfigurationBuilder();
    $configurationBuilder->apiKey('apiKey')->privateKey('file:///path/to/private.key');
    $api = new MarginTradingRestApi($configurationBuilder->build());
    $liquidationLoanRepayRequest = new LiquidationLoanRepayRequest();
    $liquidationLoanRepayRequest->setAsset('USDT');
    $liquidationLoanRepayRequest->setAmount(300.0);
    $response = $api->liquidationLoanRepay($liquidationLoanRepayRequest);
    print_r($response);
}

liquidationLoanRepayExample();
