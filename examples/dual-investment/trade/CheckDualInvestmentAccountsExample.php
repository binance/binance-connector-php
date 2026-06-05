<?php

require_once __DIR__.'/../vendor/autoload.php';

use Binance\Client\DualInvestment\Api\DualInvestmentRestApi;
use Binance\Client\DualInvestment\DualInvestmentRestApiUtil;

function checkDualInvestmentAccountsExample()
{
    $configurationBuilder = DualInvestmentRestApiUtil::getConfigurationBuilder();
    $configurationBuilder->apiKey('apiKey')->privateKey('file:///path/to/private.key');
    $api = new DualInvestmentRestApi($configurationBuilder->build());
    $recvWindow = 5000;
    $response = $api->checkDualInvestmentAccounts($recvWindow);
    print_r($response);
}

checkDualInvestmentAccountsExample();
