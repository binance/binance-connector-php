# Compression Configuration

```php
    use Binance\Client\Spot\Api\StakingRestApi;
    use Binance\Client\Spot\StakingRestApiUtil;
    
    // set up a client array
    $configurationBuilder = StakingRestApiUtil::getConfigurationBuilder();
    $configurationBuilder->compression(false);

    $api = new StakingRestApi($configurationBuilder->build());
```