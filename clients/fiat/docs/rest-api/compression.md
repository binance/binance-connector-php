# Compression Configuration

```php
    use Binance\Client\Spot\Api\FiatRestApi;
    use Binance\Client\Spot\FiatRestApiUtil;
    
    // set up a client array
    $configurationBuilder = FiatRestApiUtil::getConfigurationBuilder();
    $configurationBuilder->compression(false);

    $api = new FiatRestApi($configurationBuilder->build());
```