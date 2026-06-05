<?php

require_once __DIR__.'/../vendor/autoload.php';

use Binance\Client\DualInvestment\Api\DualInvestmentRestApi;
use Binance\Client\DualInvestment\DualInvestmentRestApiUtil;
use Binance\Client\DualInvestment\Model\ChangeAutoCompoundStatusRequest;

function changeAutoCompoundStatusExample()
{
    $configurationBuilder = DualInvestmentRestApiUtil::getConfigurationBuilder();
    $configurationBuilder->apiKey('apiKey')->privateKey('file:///path/to/private.key');
    $api = new DualInvestmentRestApi($configurationBuilder->build());
    $changeAutoCompoundStatusRequest = new ChangeAutoCompoundStatusRequest();
    $changeAutoCompoundStatusRequest->setPositionId('1');
    $response = $api->changeAutoCompoundStatus($changeAutoCompoundStatusRequest);
    print_r($response);
}

changeAutoCompoundStatusExample();
