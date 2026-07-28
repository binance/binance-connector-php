<?php

require_once __DIR__.'/../vendor/autoload.php';

use Binance\Client\VipLoan\Api\VipLoanRestApi;
use Binance\Client\VipLoan\VipLoanRestApiUtil;

function queryVIPLoanFixedRateMarketExample()
{
    $configurationBuilder = VipLoanRestApiUtil::getConfigurationBuilder();
    $configurationBuilder->apiKey('apiKey')->privateKey('file:///path/to/private.key');
    $api = new VipLoanRestApi($configurationBuilder->build());
    $loanCoin = 'USDT';
    $duration = 30;
    $current = 1;
    $size = 10;
    $recvWindow = 5000;
    $response = $api->queryVIPLoanFixedRateMarket($loanCoin, $duration, $current, $size, $recvWindow);
    print_r($response);
}

queryVIPLoanFixedRateMarketExample();
