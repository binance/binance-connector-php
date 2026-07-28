<?php

require_once __DIR__.'/../vendor/autoload.php';

use Binance\Client\SubAccount\Api\SubAccountRestApi;
use Binance\Client\SubAccount\Model\ModifySubAccountApiKeyPermissionRequest;
use Binance\Client\SubAccount\SubAccountRestApiUtil;

function modifySubAccountApiKeyPermissionExample()
{
    $configurationBuilder = SubAccountRestApiUtil::getConfigurationBuilder();
    $configurationBuilder->apiKey('apiKey')->privateKey('file:///path/to/private.key');
    $api = new SubAccountRestApi($configurationBuilder->build());
    $modifySubAccountApiKeyPermissionRequest = new ModifySubAccountApiKeyPermissionRequest();
    $modifySubAccountApiKeyPermissionRequest->setEmail('123@test.com');
    $modifySubAccountApiKeyPermissionRequest->setSubAccountApiKey('k5V49ldtn4tszj6W3hystegdfvmGbqDzjmkCtpTvC0G74WhK7yd4rfCTo4lShf');
    $response = $api->modifySubAccountApiKeyPermission($modifySubAccountApiKeyPermissionRequest);
    print_r($response);
}

modifySubAccountApiKeyPermissionExample();
