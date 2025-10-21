# Changelog

## 2.0.0 - 2025-10-21

### Changed (19)

#### REST API

- Deleted parameter `limit`
  - affected methods:
    - `queryCurrentOpenOptionOrders()` (`GET /eapi/v1/openOrders`)
- Deleted parameter `price`
  - affected methods:
    - `newBlockTradeOrder()` (`POST /eapi/v1/block/order/create`)
- Deleted parameter `quantity`
  - affected methods:
    - `newBlockTradeOrder()` (`POST /eapi/v1/block/order/create`)
- Deleted parameter `side`
  - affected methods:
    - `newBlockTradeOrder()` (`POST /eapi/v1/block/order/create`)
- Deleted parameter `symbol`
  - affected methods:
    - `newBlockTradeOrder()` (`POST /eapi/v1/block/order/create`)
- Modified parameter `orders`:
  - affected methods:
    - `placeMultipleOrders()` (`POST /eapi/v1/batchOrders`)
- Modified parameter `side`:
  - affected methods:
    - `newOrder()` (`POST /eapi/v1/order`)

- Modified response for `orderBook()` (`GET /eapi/v1/depth`):

- Modified response for `exchangeInformation()` (`GET /eapi/v1/exchangeInfo`):
  - `optionSymbols`: item property `liquidationFeeRate` added

- Modified response for `optionMarginAccountInformation()` (`GET /eapi/v1/marginAccount`):
  - `asset`: item property `adjustedEquity` added
  - `asset`: item property `lpProfit` deleted

#### WebSocket Streams

- Modified response for `partialBookDepthStreams()` (`<symbol>@depth<levels>@<updateSpeed>` stream):

- Modified response for `indexPriceStreams()` (`<symbol>@index` stream):

- Modified response for `klineCandlestickStreams()` (`<symbol>@kline_<interval>` stream):

- Modified response for `ticker24Hour()` (`<symbol>@ticker` stream):

- Modified response for `tradeStreams()` (`<symbol>@trade` stream):

- Modified response for `markPrice()` (`<underlyingAsset>@markPrice` stream):

- Modified response for `openInterest()` (`<underlyingAsset>@openInterest@<expirationDate>` stream):

- Modified response for `ticker24HourByUnderlyingAssetAndExpirationData()` (`<underlyingAsset>@ticker@<expirationDate>` stream):

- Modified response for `newSymbolInfo()` (`option_pair` stream):

## 1.0.0 - 2025-07-03

- Initial release
