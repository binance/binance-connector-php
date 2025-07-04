# Compression Configuration

```php
    use Binance\Client\Spot\Api\DerivativesTradingPortfolioMarginProRestApi;
    use Binance\Client\Spot\DerivativesTradingPortfolioMarginProRestApiUtil;
    
    // set up a client array
    $configurationBuilder = DerivativesTradingPortfolioMarginProRestApiUtil::getConfigurationBuilder();
    $configurationBuilder->compression(false);

    $api = new DerivativesTradingPortfolioMarginProRestApi($configurationBuilder->build());
```