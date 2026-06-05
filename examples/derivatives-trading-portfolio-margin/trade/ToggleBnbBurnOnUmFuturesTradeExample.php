<?php

require_once __DIR__.'/../vendor/autoload.php';

use Binance\Client\DerivativesTradingPortfolioMargin\Api\DerivativesTradingPortfolioMarginRestApi;
use Binance\Client\DerivativesTradingPortfolioMargin\DerivativesTradingPortfolioMarginRestApiUtil;
use Binance\Client\DerivativesTradingPortfolioMargin\Model\ToggleBnbBurnOnUmFuturesTradeRequest;

function toggleBnbBurnOnUmFuturesTradeExample()
{
    $configurationBuilder = DerivativesTradingPortfolioMarginRestApiUtil::getConfigurationBuilder();
    $configurationBuilder->apiKey('apiKey')->privateKey('file:///path/to/private.key');
    $api = new DerivativesTradingPortfolioMarginRestApi($configurationBuilder->build());
    $toggleBnbBurnOnUmFuturesTradeRequest = new ToggleBnbBurnOnUmFuturesTradeRequest();
    $toggleBnbBurnOnUmFuturesTradeRequest->setFeeBurn('');
    $response = $api->toggleBnbBurnOnUmFuturesTrade($toggleBnbBurnOnUmFuturesTradeRequest);
    print_r($response);
}

toggleBnbBurnOnUmFuturesTradeExample();
