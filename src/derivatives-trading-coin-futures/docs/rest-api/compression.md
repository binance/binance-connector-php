# Compression Configuration

```php
    use Binance\Client\Spot\Api\DerivativesTradingCoinFuturesRestApi;
    use Binance\Client\Spot\DerivativesTradingCoinFuturesRestApiUtil;
    
    // set up a client array
    $configurationBuilder = DerivativesTradingCoinFuturesRestApiUtil::getConfigurationBuilder();
    $configurationBuilder->compression(false);

    $api = new DerivativesTradingCoinFuturesRestApi($configurationBuilder->build());
```