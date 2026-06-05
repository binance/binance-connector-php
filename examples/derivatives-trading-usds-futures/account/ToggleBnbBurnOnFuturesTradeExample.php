<?php

require_once __DIR__.'/../vendor/autoload.php';

use Binance\Client\DerivativesTradingUsdsFutures\Api\DerivativesTradingUsdsFuturesRestApi;
use Binance\Client\DerivativesTradingUsdsFutures\DerivativesTradingUsdsFuturesRestApiUtil;
use Binance\Client\DerivativesTradingUsdsFutures\Model\ToggleBnbBurnOnFuturesTradeRequest;

function toggleBnbBurnOnFuturesTradeExample()
{
    $configurationBuilder = DerivativesTradingUsdsFuturesRestApiUtil::getConfigurationBuilder();
    $configurationBuilder->apiKey('apiKey')->privateKey('file:///path/to/private.key');
    $api = new DerivativesTradingUsdsFuturesRestApi($configurationBuilder->build());
    $toggleBnbBurnOnFuturesTradeRequest = new ToggleBnbBurnOnFuturesTradeRequest();
    $toggleBnbBurnOnFuturesTradeRequest->setFeeBurn('');
    $response = $api->toggleBnbBurnOnFuturesTrade($toggleBnbBurnOnFuturesTradeRequest);
    print_r($response);
}

toggleBnbBurnOnFuturesTradeExample();
