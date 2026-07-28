<?php

require_once __DIR__.'/../vendor/autoload.php';

use Binance\Client\DualInvestment\Api\DualInvestmentRestApi;
use Binance\Client\DualInvestment\DualInvestmentRestApiUtil;
use Binance\Client\DualInvestment\Model\AutoCompoundPlan;
use Binance\Client\DualInvestment\Model\SubscribeDualInvestmentProductsRequest;

function subscribeDualInvestmentProductsExample()
{
    $configurationBuilder = DualInvestmentRestApiUtil::getConfigurationBuilder();
    $configurationBuilder->apiKey('apiKey')->privateKey('file:///path/to/private.key');
    $api = new DualInvestmentRestApi($configurationBuilder->build());
    $subscribeDualInvestmentProductsRequest = new SubscribeDualInvestmentProductsRequest();
    $subscribeDualInvestmentProductsRequest->setId('741590');
    $subscribeDualInvestmentProductsRequest->setOrderId('8257205859');
    $subscribeDualInvestmentProductsRequest->setDepositAmount(1);
    $subscribeDualInvestmentProductsRequest->setAutoCompoundPlan(AutoCompoundPlan::NONE);
    $response = $api->subscribeDualInvestmentProducts($subscribeDualInvestmentProductsRequest);
    print_r($response);
}

subscribeDualInvestmentProductsExample();
