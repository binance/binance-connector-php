<?php

require_once __DIR__.'/../vendor/autoload.php';

use Binance\Client\SubAccount\Api\SubAccountRestApi;
use Binance\Client\SubAccount\Model\MovePositionForSubAccountRequest;
use Binance\Client\SubAccount\SubAccountRestApiUtil;

function movePositionForSubAccountExample()
{
    $configurationBuilder = SubAccountRestApiUtil::getConfigurationBuilder();
    $configurationBuilder->apiKey('apiKey')->privateKey('file:///path/to/private.key');
    $api = new SubAccountRestApi($configurationBuilder->build());
    $movePositionForSubAccountRequest = new MovePositionForSubAccountRequest();
    $movePositionForSubAccountRequest->setFromUserEmail('');
    $movePositionForSubAccountRequest->setToUserEmail('');
    $movePositionForSubAccountRequest->setProductType('');
    $movePositionForSubAccountRequest->setOrderArgs(null);
    $response = $api->movePositionForSubAccount($movePositionForSubAccountRequest);
    print_r($response);
}

movePositionForSubAccountExample();
