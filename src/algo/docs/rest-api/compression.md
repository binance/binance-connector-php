# Compression Configuration

```php
    use Binance\Client\Spot\Api\AlgoRestApi;
    use Binance\Client\Spot\AlgoRestApiUtil;
    
    // set up a client array
    $configurationBuilder = AlgoRestApiUtil::getConfigurationBuilder();
    $configurationBuilder->compression(false);

    $api = new AlgoRestApi($configurationBuilder->build());
```