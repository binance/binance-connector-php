# Compression Configuration

```php
    use Binance\Client\Spot\Api\SimpleEarnRestApi;
    use Binance\Client\Spot\SimpleEarnRestApiUtil;
    
    // set up a client array
    $configurationBuilder = SimpleEarnRestApiUtil::getConfigurationBuilder();
    $configurationBuilder->compression(false);

    $api = new SimpleEarnRestApi($configurationBuilder->build());
```