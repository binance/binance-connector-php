<?php

require_once __DIR__.'/../vendor/autoload.php';

use Binance\Client\DualInvestment\Api\DualInvestmentRestApi;
use Binance\Client\DualInvestment\DualInvestmentRestApiUtil;

function getDualInvestmentProductListExample()
{
    $configurationBuilder = DualInvestmentRestApiUtil::getConfigurationBuilder();
    $configurationBuilder->apiKey('apiKey')->privateKey('file:///path/to/private.key');
    $api = new DualInvestmentRestApi($configurationBuilder->build());
    $optionType = '';
    $exercisedCoin = '';
    $investCoin = '';
    $pageSize = 10;
    $pageIndex = 1;
    $recvWindow = 5000;
    $response = $api->getDualInvestmentProductList($optionType, $exercisedCoin, $investCoin, $pageSize, $pageIndex, $recvWindow);
    print_r($response);
}

getDualInvestmentProductListExample();
