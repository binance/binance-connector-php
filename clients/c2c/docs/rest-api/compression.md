# Compression Configuration

```php
    use Binance\Client\Spot\Api\C2cRestApi;
    use Binance\Client\Spot\C2cRestApiUtil;
    
    // set up a client array
    $configurationBuilder = C2cRestApiUtil::getConfigurationBuilder();
    $configurationBuilder->compression(false);

    $api = new C2cRestApi($configurationBuilder->build());
```