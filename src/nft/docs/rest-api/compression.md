# Compression Configuration

```php
    use Binance\Client\Spot\Api\NftRestApi;
    use Binance\Client\Spot\NftRestApiUtil;
    
    // set up a client array
    $configurationBuilder = NftRestApiUtil::getConfigurationBuilder();
    $configurationBuilder->compression(false);

    $api = new NftRestApi($configurationBuilder->build());
```