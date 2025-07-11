<?php

require_once __DIR__.'/../vendor/autoload.php';

/*
 * Binance Spot REST API
 * OpenAPI Specifications for the Binance Spot REST API  API documents:   - [Github rest-api documentation file](https://github.com/binance/binance-spot-api-docs/blob/master/rest-api.md)   - [General API information for rest-api on website](https://developers.binance.com/docs/binance-spot-api-docs/rest-api/general-api-information)
 *
 * The version of the OpenAPI document: 1.0.0
 *
 *
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */
use Binance\Client\VipLoan\Api\VipLoanRestApi;
use Binance\Client\VipLoan\VipLoanRestApiUtil;

function checkVIPLoanCollateralAccountExample()
{
    $configurationBuilder = VipLoanRestApiUtil::getConfigurationBuilder();
    $configurationBuilder->apiKey('apiKey')->privateKey('file:///path/to/private.key');
    $api = new VipLoanRestApi($configurationBuilder->build());
    $orderId = 1;
    $collateralAccountId = 1;
    $recvWindow = 5000;
    $response = $api->checkVIPLoanCollateralAccount($orderId, $collateralAccountId, $recvWindow);
    print_r($response);
}

checkVIPLoanCollateralAccountExample();
