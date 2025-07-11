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
use Binance\Client\Spot\Api\SpotRestApi;
use Binance\Client\Spot\Model\OrderOcoRequest;
use Binance\Client\Spot\Model\Side;
use Binance\Client\Spot\SpotRestApiUtil;

function orderOcoExample()
{
    $configurationBuilder = SpotRestApiUtil::getConfigurationBuilder();
    $configurationBuilder->apiKey('apiKey')->privateKey('file:///path/to/private.key');
    $api = new SpotRestApi($configurationBuilder->build());
    $orderOcoRequest = new OrderOcoRequest();
    $orderOcoRequest->setSymbol('BNBUSDT');
    $orderOcoRequest->setSide(Side::BUY);
    $orderOcoRequest->setQuantity(1.0);
    $orderOcoRequest->setPrice(1.0);
    $orderOcoRequest->setStopPrice(1.0);
    $response = $api->orderOco($orderOcoRequest);
    print_r($response);
}

orderOcoExample();
