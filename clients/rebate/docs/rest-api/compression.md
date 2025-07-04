# Compression Configuration

```php
    use Binance\Client\Spot\Api\RebateRestApi;
    use Binance\Client\Spot\RebateRestApiUtil;
    
    // set up a client array
    $configurationBuilder = RebateRestApiUtil::getConfigurationBuilder();
    $configurationBuilder->compression(false);

    $api = new RebateRestApi($configurationBuilder->build());
```