# Compression Configuration

```php
    use Binance\Client\Spot\Api\DerivativesTradingUsdsFuturesRestApi;
    use Binance\Client\Spot\DerivativesTradingUsdsFuturesRestApiUtil;
    
    // set up a client array
    $configurationBuilder = DerivativesTradingUsdsFuturesRestApiUtil::getConfigurationBuilder();
    $configurationBuilder->compression(false);

    $api = new DerivativesTradingUsdsFuturesRestApi($configurationBuilder->build());
```