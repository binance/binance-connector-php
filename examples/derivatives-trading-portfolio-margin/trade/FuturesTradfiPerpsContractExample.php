<?php

require_once __DIR__.'/../vendor/autoload.php';

use Binance\Client\DerivativesTradingPortfolioMargin\Api\DerivativesTradingPortfolioMarginRestApi;
use Binance\Client\DerivativesTradingPortfolioMargin\DerivativesTradingPortfolioMarginRestApiUtil;
use Binance\Client\DerivativesTradingPortfolioMargin\Model\FuturesTradfiPerpsContractRequest;

function futuresTradfiPerpsContractExample()
{
    $configurationBuilder = DerivativesTradingPortfolioMarginRestApiUtil::getConfigurationBuilder();
    $configurationBuilder->apiKey('apiKey')->privateKey('file:///path/to/private.key');
    $api = new DerivativesTradingPortfolioMarginRestApi($configurationBuilder->build());
    $futuresTradfiPerpsContractRequest = new FuturesTradfiPerpsContractRequest();
    $response = $api->futuresTradfiPerpsContract($futuresTradfiPerpsContractRequest);
    print_r($response);
}

futuresTradfiPerpsContractExample();
