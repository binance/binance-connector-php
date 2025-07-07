# Compression Configuration

```php
    use Binance\Client\Spot\Api\DerivativesTradingOptionsRestApi;
    use Binance\Client\Spot\DerivativesTradingOptionsRestApiUtil;
    
    // set up a client array
    $configurationBuilder = DerivativesTradingOptionsRestApiUtil::getConfigurationBuilder();
    $configurationBuilder->compression(false);

    $api = new DerivativesTradingOptionsRestApi($configurationBuilder->build());
```