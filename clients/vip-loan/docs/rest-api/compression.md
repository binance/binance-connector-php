# Compression Configuration

```php
    use Binance\Client\Spot\Api\VipLoanRestApi;
    use Binance\Client\Spot\VipLoanRestApiUtil;
    
    // set up a client array
    $configurationBuilder = VipLoanRestApiUtil::getConfigurationBuilder();
    $configurationBuilder->compression(false);

    $api = new VipLoanRestApi($configurationBuilder->build());
```