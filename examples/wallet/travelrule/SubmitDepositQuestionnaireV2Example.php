<?php

require_once __DIR__.'/../vendor/autoload.php';

use Binance\Client\Wallet\Api\WalletRestApi;
use Binance\Client\Wallet\Model\SubmitDepositQuestionnaireV2Request;
use Binance\Client\Wallet\WalletRestApiUtil;

function submitDepositQuestionnaireV2Example()
{
    $configurationBuilder = WalletRestApiUtil::getConfigurationBuilder();
    $configurationBuilder->apiKey('apiKey')->privateKey('file:///path/to/private.key');
    $api = new WalletRestApi($configurationBuilder->build());
    $submitDepositQuestionnaireV2Request = new SubmitDepositQuestionnaireV2Request();
    $submitDepositQuestionnaireV2Request->setDepositId(1);
    $submitDepositQuestionnaireV2Request->setQuestionnaire('');
    $response = $api->submitDepositQuestionnaireV2($submitDepositQuestionnaireV2Request);
    print_r($response);
}

submitDepositQuestionnaireV2Example();
