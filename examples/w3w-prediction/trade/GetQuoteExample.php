<?php

require_once __DIR__.'/../vendor/autoload.php';

use Binance\Client\W3WPrediction\Api\W3WPredictionRestApi;
use Binance\Client\W3WPrediction\Model\GetQuoteRequest;
use Binance\Client\W3WPrediction\Model\OrderType;
use Binance\Client\W3WPrediction\Model\Side;
use Binance\Client\W3WPrediction\W3WPredictionRestApiUtil;

function getQuoteExample()
{
    $configurationBuilder = W3WPredictionRestApiUtil::getConfigurationBuilder();
    $configurationBuilder->apiKey('apiKey')->privateKey('file:///path/to/private.key');
    $api = new W3WPredictionRestApi($configurationBuilder->build());
    $getQuoteRequest = new GetQuoteRequest();
    $getQuoteRequest->setWalletAddress('0x12e32db8817e292508c34111cbc4b23340df542c');
    $getQuoteRequest->setTokenId('112233');
    $getQuoteRequest->setSide(Side::BUY);
    $getQuoteRequest->setAmountIn('1000000000000000000');
    $getQuoteRequest->setOrderType(OrderType::MARKET);
    $getQuoteRequest->setSlippageBps(1200);
    $response = $api->getQuote($getQuoteRequest);
    print_r($response);
}

getQuoteExample();
