<?php

require_once __DIR__.'/../vendor/autoload.php';

use Binance\Client\VipLoan\Api\VipLoanRestApi;
use Binance\Client\VipLoan\VipLoanRestApiUtil;

function queryApplicationStatusExample()
{
    $configurationBuilder = VipLoanRestApiUtil::getConfigurationBuilder();
    $configurationBuilder->apiKey('apiKey')->privateKey('file:///path/to/private.key');
    $api = new VipLoanRestApi($configurationBuilder->build());
    $current = 1;
    $limit = 10;
    $recvWindow = 5000;
    $response = $api->queryApplicationStatus($current, $limit, $recvWindow);
    print_r($response);
}

queryApplicationStatusExample();
