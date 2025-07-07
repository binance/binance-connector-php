# Compression Configuration

```php
    use Binance\Client\Spot\Api\CopyTradingRestApi;
    use Binance\Client\Spot\CopyTradingRestApiUtil;
    
    // set up a client array
    $configurationBuilder = CopyTradingRestApiUtil::getConfigurationBuilder();
    $configurationBuilder->compression(false);

    $api = new CopyTradingRestApi($configurationBuilder->build());
```