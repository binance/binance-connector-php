<?php

require_once __DIR__.'/../vendor/autoload.php';

use Binance\Client\Wallet\Api\WalletRestApi;
use Binance\Client\Wallet\WalletRestApiUtil;

function checkQuestionnaireRequirementsExample()
{
    $configurationBuilder = WalletRestApiUtil::getConfigurationBuilder();
    $configurationBuilder->apiKey('apiKey')->privateKey('file:///path/to/private.key');
    $api = new WalletRestApi($configurationBuilder->build());
    $recvWindow = 5000;
    $response = $api->checkQuestionnaireRequirements($recvWindow);
    print_r($response);
}

checkQuestionnaireRequirementsExample();
