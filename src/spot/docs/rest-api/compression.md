# Compression Configuration

```php
    use Binance\Client\Spot\Api\SpotRestApi;
    use Binance\Client\Spot\SpotRestApiUtil;
    
    // set up a client array
    $configurationBuilder = SpotRestApiUtil::getConfigurationBuilder();
    $configurationBuilder->compression(false);

    $api = new SpotRestApi($configurationBuilder->build());
```