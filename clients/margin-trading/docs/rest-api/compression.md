# Compression Configuration

```php
    use Binance\Client\Spot\Api\MarginTradingRestApi;
    use Binance\Client\Spot\MarginTradingRestApiUtil;
    
    // set up a client array
    $configurationBuilder = MarginTradingRestApiUtil::getConfigurationBuilder();
    $configurationBuilder->compression(false);

    $api = new MarginTradingRestApi($configurationBuilder->build());
```