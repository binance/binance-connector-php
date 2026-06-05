<?php

require_once __DIR__.'/../vendor/autoload.php';

use Binance\Client\DualInvestment\Api\DualInvestmentRestApi;
use Binance\Client\DualInvestment\DualInvestmentRestApiUtil;
use Binance\Client\DualInvestment\Model\SubscribeDualInvestmentProductsRequest;

function subscribeDualInvestmentProductsExample()
{
    $configurationBuilder = DualInvestmentRestApiUtil::getConfigurationBuilder();
    $configurationBuilder->apiKey('apiKey')->privateKey('file:///path/to/private.key');
    $api = new DualInvestmentRestApi($configurationBuilder->build());
    $subscribeDualInvestmentProductsRequest = new SubscribeDualInvestmentProductsRequest();
    $subscribeDualInvestmentProductsRequest->setId('');
    $subscribeDualInvestmentProductsRequest->setOrderId('1');
    $subscribeDualInvestmentProductsRequest->setDepositAmount(1.0);
    $subscribeDualInvestmentProductsRequest->setAutoCompoundPlan('NONE');
    $response = $api->subscribeDualInvestmentProducts($subscribeDualInvestmentProductsRequest);
    print_r($response);
}

subscribeDualInvestmentProductsExample();
