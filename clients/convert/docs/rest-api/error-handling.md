# Error Handling

```php
    $configurationBuilder = ConvertRestApiUtil::getConfigurationBuilder();
    $configurationBuilder->apiKey('apiKey')->privateKey('file:///path/to/private.key');
    $api = new ConvertRestApi($configurationBuilder->build());
    $symbol = 'BNBUSDT';
    try {
        $response = $api->accountCommission($symbol);
    } catch (ApiException $e) {
        $httpCode = $e->getResponseHeaders();
        $responseObject = $e->getResponseObject();
    }
    print_r($response);
```