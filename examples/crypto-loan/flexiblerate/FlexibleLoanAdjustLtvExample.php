<?php

require_once __DIR__.'/../vendor/autoload.php';

use Binance\Client\CryptoLoan\Api\CryptoLoanRestApi;
use Binance\Client\CryptoLoan\CryptoLoanRestApiUtil;
use Binance\Client\CryptoLoan\Model\FlexibleLoanAdjustLtvRequest;

function flexibleLoanAdjustLtvExample()
{
    $configurationBuilder = CryptoLoanRestApiUtil::getConfigurationBuilder();
    $configurationBuilder->apiKey('apiKey')->privateKey('file:///path/to/private.key');
    $api = new CryptoLoanRestApi($configurationBuilder->build());
    $flexibleLoanAdjustLtvRequest = new FlexibleLoanAdjustLtvRequest();
    $flexibleLoanAdjustLtvRequest->setLoanCoin('');
    $flexibleLoanAdjustLtvRequest->setCollateralCoin('');
    $flexibleLoanAdjustLtvRequest->setAdjustmentAmount(1.0);
    $flexibleLoanAdjustLtvRequest->setDirection('');
    $response = $api->flexibleLoanAdjustLtv($flexibleLoanAdjustLtvRequest);
    print_r($response);
}

flexibleLoanAdjustLtvExample();
