# Compression Configuration

```php
    use Binance\Client\Spot\Api\PayRestApi;
    use Binance\Client\Spot\PayRestApiUtil;
    
    // set up a client array
    $configurationBuilder = PayRestApiUtil::getConfigurationBuilder();
    $configurationBuilder->compression(false);

    $api = new PayRestApi($configurationBuilder->build());
```