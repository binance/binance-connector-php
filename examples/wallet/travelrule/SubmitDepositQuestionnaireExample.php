<?php

require_once __DIR__.'/../vendor/autoload.php';

use Binance\Client\Wallet\Api\WalletRestApi;
use Binance\Client\Wallet\Model\SubmitDepositQuestionnaireRequest;
use Binance\Client\Wallet\WalletRestApiUtil;

function submitDepositQuestionnaireExample()
{
    $configurationBuilder = WalletRestApiUtil::getConfigurationBuilder();
    $configurationBuilder->apiKey('apiKey')->privateKey('file:///path/to/private.key');
    $api = new WalletRestApi($configurationBuilder->build());
    $submitDepositQuestionnaireRequest = new SubmitDepositQuestionnaireRequest();
    $submitDepositQuestionnaireRequest->setSubAccountId('1');
    $submitDepositQuestionnaireRequest->setDepositId(1);
    $submitDepositQuestionnaireRequest->setQuestionnaire('');
    $submitDepositQuestionnaireRequest->setBeneficiaryPii('');
    $submitDepositQuestionnaireRequest->setSignature('');
    $response = $api->submitDepositQuestionnaire($submitDepositQuestionnaireRequest);
    print_r($response);
}

submitDepositQuestionnaireExample();
