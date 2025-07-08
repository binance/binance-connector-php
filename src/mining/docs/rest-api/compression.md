# Compression Configuration

```php
    use Binance\Client\Spot\Api\MiningRestApi;
    use Binance\Client\Spot\MiningRestApiUtil;
    
    // set up a client array
    $configurationBuilder = MiningRestApiUtil::getConfigurationBuilder();
    $configurationBuilder->compression(false);

    $api = new MiningRestApi($configurationBuilder->build());
```