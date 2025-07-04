# **Migration Guide: Transition from Monolithic Binance Connector**

With the move towards modularization, Binance connectors are now split into smaller, product-specific libraries. This guide explains how to migrate from the monolithic `binance-connector-php` for Spot and `binance-futures-connector-php` for Futures to the new modular connectors.

## **Overview of Changes**

| Feature | Monolithic Connector | Modular Connector                                                 |
|---------|----------------------|-------------------------------------------------------------------|
| Package Name | `binance-connector-php`, `binance-futures-connector-php` | `binance-<product>`                                |
| API Coverage | All Binance APIs | Individual APIs (Spot, Futures, Wallet, Algo Trading, Mining etc.) |
| Imports | Single package import | Separate package per product                                      |
| Code Structure | One large client | Smaller, focused clients                                          |

## **Migration Steps**

### **Step 1: Replace maven dependencies**

If you were using the old connector, remove it from your project:
```json
    composer remove binance/binance-connector-php
```
And replace it with the new connector(s):
For Spot (Spot package):
```json
    composer require binance/spot
```

For Futures (COIN-M Futures package):
```json
    composer require binance/derivatives-trading-coin-futures
```

### **Step 3: Update Imports**

Update your import paths:

**Old (Spot):**

```php
use \Binance\Spot;
```

**New (Spot):**

```php
use \Binance\Client\Spot\Api\SpotRestApi;
```

**Old (CMFutures):**

```php
import com.binance.connector.futures.client.impl.CMFuturesClientImpl;
```

**New (COIN-M Futures):**

```php
import com.binance.connector.client.derivatives_trading_coin_futures.rest.api.DerivativesTradingCoinFuturesRestApi;
```

### **Step 4: Update Client Initialization**

The new structure introduces a more modular approach to client initialization.

**Old (Spot - Monolithic Connector):**

```php
    $key = ''; # api key is also required
    $privateKey = 'file:///path/to/rsa/private/key.pem';

    $client = new \Binance\Spot([
        'key'  => $key,
        'privateKey'  => $privateKey, # pass the key file directly
        'baseURL' => 'https://testnet.binance.vision'
    ]);

    $response = $client->account();
    echo json_encode($response);
```

**New (Spot - Modular Connector):**

```php
    $configurationBuilder = SpotRestApiUtil::getConfigurationBuilder();
    $configurationBuilder->apiKey('apiKey')->privateKey('file:///path/to/private.key');
    $api = new SpotRestApi($configurationBuilder->build());
    $omitZeroBalances = false;
    $recvWindow = 5000;
    $response = $api->getAccount($omitZeroBalances, $recvWindow);
    print_r($response);
```

### **Step 5: Check for API Differences**

Some function names or response structures may have changed. Refer to the modular connector's documentation for details.

## **Backward Compatibility**

- If a modular connector is **not yet available** for your use case, continue using the monolithic connector (`binance-connector-php`).
- The monolithic connector will remain available, but it is **recommended** to migrate when modular versions are released.

---

## **FAQs**

### **What if my product does not have a modular connector yet?**

You can continue using the monolithic connector until the modular version is released.

### **Will the monolithic connector still receive updates?**

Critical bug fixes will be provided, but feature updates will focus on the modular connectors.

### **Where can I find more examples?**

Check the modular connector's documentation for detailed examples.