# Compression Configuration

```php
    use Binance\Client\Spot\Api\DerivativesTradingPortfolioMarginRestApi;
    use Binance\Client\Spot\DerivativesTradingPortfolioMarginRestApiUtil;
    
    // set up a client array
    $configurationBuilder = DerivativesTradingPortfolioMarginRestApiUtil::getConfigurationBuilder();
    $configurationBuilder->compression(false);

    $api = new DerivativesTradingPortfolioMarginRestApi($configurationBuilder->build());
```