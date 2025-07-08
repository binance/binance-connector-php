# Compression Configuration

```php
    use Binance\Client\Spot\Api\WalletRestApi;
    use Binance\Client\Spot\WalletRestApiUtil;
    
    // set up a client array
    $configurationBuilder = WalletRestApiUtil::getConfigurationBuilder();
    $configurationBuilder->compression(false);

    $api = new WalletRestApi($configurationBuilder->build());
```