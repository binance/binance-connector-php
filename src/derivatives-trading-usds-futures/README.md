# Binance PHP USDS Connector

[![Build Status](https://img.shields.io/github/actions/workflow/status/binance/binance-connector-php/php.yml)](https://github.com/binance/binance-connector-php/actions)
[![Open Issues](https://img.shields.io/github/issues/binance/binance-connector-php)](https://github.com/binance/binance-connector-php/issues)
[![Code Style: PHP-CS-Fixer](https://img.shields.io/badge/code%20style-PHP--CS--Fixer-ff69b4)](https://github.com/PHP-CS-Fixer/PHP-CS-Fixer)
![PHP Version](https://img.shields.io/badge/PHP-%3E=8.4.0-brightgreen)
[![Known Vulnerabilities](https://snyk.io/test/github/binance/binance-connector-php/badge.svg)](https://snyk.io/test/github/binance/binance-connector-php)
[![License: MIT](https://img.shields.io/badge/License-MIT-yellow.svg)](https://opensource.org/licenses/MIT)

This is a client library for the Binance Derivatives Trading USDS-M Futures API, enabling developers to interact programmatically with Binance's API to suit their derivative trading needs, through three distinct endpoints:

- [REST API](./lib/Api/)

## Table of Contents

- [Supported Features](#supported-features)
- [Installation](#installation)
- [Documentation](#documentation)
- [REST APIs](#rest-apis)
- [Testing](#testing)
- [Migration Guide](#migration-guide)
- [Contributing](#contributing)
- [License](#license)

## Supported Features

- REST API Endpoints:
    - `/fapi/*`
- Inclusion of test cases and examples for quick onboarding.

## Installation

To use this library, ensure your environment is running PHP version **8.4.0** or newer.

Then add dependency to pom.xml:

```bash
composer require binance/binance-connector-php
```

## Documentation

For detailed information, refer to the [Binance API Documentation](https://developers.binance.com/docs/algo).

### REST APIs

All REST API endpoints are available through the [`rest`](./lib/Api/) module. Note that some endpoints require authentication using your Binance API credentials.

```php
  use Binance\Client\Spot\Api\DerivativesTradingUsdsFuturesRestApi;
  use Binance\Client\Spot\DerivativesTradingUsdsFuturesRestApiUtil;

  $configurationBuilder = DerivativesTradingUsdsFuturesRestApiUtil::getConfigurationBuilder();
  $configurationBuilder->apiKey('apiKey')
  ->privateKey('file:///path/to/private.key') // Provide the private key directly as a string or specify the path to a private key file (e.g., '/path/to/private_key.pem')
  ->privateKeyPass('myPrivateKeyPass'); // Optional: Required if the private key is encrypted
  $api = new DerivativesTradingUsdsFuturesRestApi($configurationBuilder->build());
```

More examples can be found in the [`examples/rest`](./../../examples/derivatives-trading-usds-futures) folder.

#### Configuration Options

The REST API supports the following advanced configuration options:

- `proxy`: Proxy configuration for http client.
- `certificatePinner`: Certificate Pinner configuration for http client.
- `connectTimeout`: Timeout for requests in milliseconds (default: 1000 ms).
- `readTimeout`: Timeout for requests in milliseconds (default: 5000 ms).
- `compression`: Enable response compression (default: true).
- `retries`: Number of retry attempts for failed requests (default: 3).
- `backoff`: Delay in milliseconds between retries (default: 200 ms).
- `timeUnit`: TimeUnit to be returned by API (default MILLISECOND).
- `apiKey`: Binance API Key
- `secretKey`: Binance Secret Key, if using HMAC algorithm 
- `privateKey`: RSA or ED25519 private key for authentication.
- `privateKeyPass`: Passphrase for the private key, if encrypted.

##### Timeout

You can configure a timeout for requests in milliseconds. If the request exceeds the specified timeout, it will be aborted. See the [Timeout example](./docs/rest-api/timeout.md) for detailed usage.

##### Proxy

The REST API supports HTTP/HTTPS proxy configurations. See the [Proxy example](./docs/rest-api/proxy.md) for detailed usage.

##### Keep-Alive

Enable HTTP keep-alive for persistent connections. See the [Keep-Alive example](./docs/rest-api/keepAlive.md) for detailed usage.

##### Compression

Enable or disable response compression. See the [Compression example](./docs/rest-api/compression.md) for detailed usage.

##### Retries

Configure the number of retry attempts and delay in milliseconds between retries for failed requests. See the [Retries example](./docs/rest-api/retries.md) for detailed usage.

##### Key Pair Based Authentication

The REST API supports key pair-based authentication for secure communication. You can use `RSA` or `ED25519` keys for signing requests. See the [Key Pair Based Authentication example](./docs/rest-api/key-pair-authentication.md) for detailed usage.

##### Certificate Pinning

To enhance security, you can use certificate pinning with the `httpsAgent` option in the configuration. This ensures the client only communicates with servers using specific certificates. See the [Certificate Pinning example](./docs/rest-api/certificate-pinning.md) for detailed usage.

#### Error Handling

The REST API provides detailed error types to help you handle issues effectively:

- `ConnectorClientError`: General client error.

See the [Error Handling example](./docs/rest-api/error-handling.md) for detailed usage.

If `basePath` is not provided, it defaults to `https://api.binance.com`.

## Testing

To run the tests:

```bash
phpunit test/Api/
```

The tests cover:

- REST API endpoints
- Signature generation

## Migration Guide

If you are upgrading to the new modularized structure, refer to the [Migration Guide](./docs/rest-api/migration-guide.md) for detailed steps.

## Contributing

Contributions are welcome!

Since this repository contains auto-generated code, we encourage you to start by opening a GitHub issue to discuss your ideas or suggest improvements. This helps ensure that changes align with the project's goals and auto-generation processes.

To contribute:

1. Open a GitHub issue describing your suggestion or the bug you've identified.
2. If it's determined that changes are necessary, the maintainers will merge the changes into the main branch.

Please ensure that all tests pass if you're making a direct contribution. Submit a pull request only after discussing and confirming the change.

Thank you for your contributions!

## License

This project is licensed under the MIT License. See the [LICENSE](../../LICENSE) file for details.