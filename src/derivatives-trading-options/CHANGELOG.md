# Changelog

## 3.0.0 - 2026-01-08

### Added (10)

#### REST API

- `userCommission()` (`GET /eapi/v1/commission`)

#### WebSocket Streams

- `diffBookDepthStreams()` (`<symbol>@depth@<updateSpeed>` stream)
- `indexPriceStreams()` (`!index@arr` stream)
- `individualSymbolBookTickerStreams()` (`<symbol>@bookTicker` stream)
- `markPrice()` (`<underlying>@optionMarkPrice` stream)
- `newSymbolInfo()` (`!optionSymbol` stream)
- `openInterest()` (`underlying@optionOpenInterest@<expirationDate>` stream)
- `partialBookDepthStreams()` (`<symbol>@depth<level>@<updateSpeed>` stream)
- `ticker24Hour()` (`<symbol>@optionTicker` stream)
- `tradeStreams()` (`<symbol>@optionTrade` stream)

### Changed (21)

#### REST API

- Modified parameter `orders`:
  - items.`isMmp`: type `boolean` → `string`
  - items.`postOnly`: type `boolean` → `string`
  - items.`price`: type `number` → `string`
  - items.`quantity`: type `number` → `string`
  - items.`reduceOnly`: type `boolean` → `string`
  - items.`timeInForce`: enum added: `GTX`
  - items.`isMmp`: type `boolean` → `string`
  - items.`postOnly`: type `boolean` → `string`
  - items.`price`: type `number` → `string`
  - items.`quantity`: type `number` → `string`
  - items.`reduceOnly`: type `boolean` → `string`
  - items.`timeInForce`: enum added: `GTX`
  - affected methods:
    - `placeMultipleOrders()` (`POST /eapi/v1/batchOrders`)
- Modified parameter `timeInForce`:
  - enum added: `GTX`
  - affected methods:
    - `newOrder()` (`POST /eapi/v1/order`)
- Modified response for `cancelAllOptionOrdersByUnderlying()` (`DELETE /eapi/v1/allOpenOrdersByUnderlying`):
  - property `data` deleted

- Modified response for `cancelMultipleOptionOrders()` (`DELETE /eapi/v1/batchOrders`):
  - items: property `optionSide` added
  - items: property `source` added
  - items: property `quoteAsset` added
  - items: property `priceScale` added
  - items: property `quantityScale` added
  - items: property `mmp` added
  - items: property `fee` deleted
  - items: item property `optionSide` added
  - items: item property `source` added
  - items: item property `quoteAsset` added
  - items: item property `priceScale` added
  - items: item property `quantityScale` added
  - items: item property `mmp` added
  - items: item property `fee` deleted

- Modified response for `placeMultipleOrders()` (`POST /eapi/v1/batchOrders`):
  - items: property `quoteAsset` added
  - items: property `source` added
  - items: property `optionSide` added
  - items: property `createTime` added
  - items: property `updateTime` added
  - items: property `timeInForce` added
  - items: property `quantityScale` added
  - items: property `executedQty` added
  - items: property `avgPrice` added
  - items: property `status` added
  - items: property `priceScale` added
  - items: property `postOnly` deleted
  - items: item property `quoteAsset` added
  - items: item property `source` added
  - items: item property `optionSide` added
  - items: item property `createTime` added
  - items: item property `updateTime` added
  - items: item property `timeInForce` added
  - items: item property `quantityScale` added
  - items: item property `executedQty` added
  - items: item property `avgPrice` added
  - items: item property `status` added
  - items: item property `priceScale` added
  - items: item property `postOnly` deleted

- Modified response for `orderBook()` (`GET /eapi/v1/depth`):
  - property `lastUpdateId` added
  - property `u` deleted

- Modified response for `exchangeInformation()` (`GET /eapi/v1/exchangeInfo`):
  - `optionSymbols`.items: property `status` added
  - `optionSymbols`.items: property `takerFeeRate` deleted
  - `optionSymbols`.items: property `makerFeeRate` deleted
  - `optionSymbols`.items: item property `status` added
  - `optionSymbols`.items: item property `takerFeeRate` deleted
  - `optionSymbols`.items: item property `makerFeeRate` deleted

- Modified response for `userExerciseRecord()` (`GET /eapi/v1/exerciseRecord`):
  - items: property `markPrice` deleted
  - items: item property `markPrice` deleted

- Modified response for `queryOptionOrderHistory()` (`GET /eapi/v1/historyOrders`):
  - items: property `source` deleted
  - items: property `reason` deleted
  - items: property `fee` deleted
  - items: property `postOnly` deleted
  - items: item property `source` deleted
  - items: item property `reason` deleted
  - items: item property `fee` deleted
  - items: item property `postOnly` deleted

- Modified response for `klineCandlestickData()` (`GET /eapi/v1/klines`):
  - items: type `object` → `array`
  - items: property `open` deleted
  - items: property `closeTime` deleted
  - items: property `openTime` deleted
  - items: property `takerVolume` deleted
  - items: property `amount` deleted
  - items: property `interval` deleted
  - items: property `close` deleted
  - items: property `low` deleted
  - items: property `takerAmount` deleted
  - items: property `tradeCount` deleted
  - items: property `volume` deleted
  - items: property `high` deleted
  - items: item property `open` deleted
  - items: item property `closeTime` deleted
  - items: item property `openTime` deleted
  - items: item property `takerVolume` deleted
  - items: item property `amount` deleted
  - items: item property `interval` deleted
  - items: item property `close` deleted
  - items: item property `low` deleted
  - items: item property `takerAmount` deleted
  - items: item property `tradeCount` deleted
  - items: item property `volume` deleted
  - items: item property `high` deleted

- Modified response for `startUserDataStream()` (`POST /eapi/v1/listenKey`):
  - property `expiration` added

- Modified response for `optionMarginAccountInformation()` (`GET /eapi/v1/marginAccount`):
  - property `canDeposit` added
  - property `canTrade` added
  - property `canWithdraw` added
  - property `reduceOnly` added

- Modified response for `queryCurrentOpenOptionOrders()` (`GET /eapi/v1/openOrders`):
  - items: property `postOnly` deleted
  - items: property `fee` deleted
  - items: item property `postOnly` deleted
  - items: item property `fee` deleted

- Modified response for `cancelOptionOrder()` (`DELETE /eapi/v1/order`):
  - property `fee` deleted
  - property `postOnly` deleted

- Modified response for `querySingleOrder()` (`GET /eapi/v1/order`):
  - property `postOnly` deleted
  - property `source` deleted
  - property `fee` deleted

- Modified response for `newOrder()` (`POST /eapi/v1/order`):
  - property `source` added
  - property `postOnly` deleted
  - property `createDate` deleted
  - property `fee` deleted

- Modified response for `optionPositionInformation()` (`GET /eapi/v1/position`):
  - items: property `bidQuantity` added
  - items: property `time` added
  - items: property `askQuantity` added
  - items: property `positionCost` deleted
  - items: property `reducibleQty` deleted
  - items: property `ror` deleted
  - items: item property `bidQuantity` added
  - items: item property `time` added
  - items: item property `askQuantity` added
  - items: item property `positionCost` deleted
  - items: item property `reducibleQty` deleted
  - items: item property `ror` deleted

- Modified response for `recentTradesList()` (`GET /eapi/v1/trades`):
  - items: property `tradeId` added
  - items.`id`: type `string` → `integer`
  - items: item property `tradeId` added
  - items.`id`: type `string` → `integer`

- Modified response for `accountTradeList()` (`GET /eapi/v1/userTrades`):
  - items: property `volatility` deleted
  - items: item property `volatility` deleted

#### WebSocket Streams

- Modified parameter `id`:
  - type `string` → `integer`
  - affected methods:
    - `klineCandlestickStreams()` (`<symbol>@kline_<interval>` stream)
- Modified response for `klineCandlestickStreams()` (`<symbol>@kline_<interval>` stream):
  - `k`: property `f` added
  - `k`: property `F` deleted

### Removed (12)

#### REST API

- `getDownloadIdForOptionTransactionHistory()` (`GET /eapi/v1/income/asyn`)
- `getOptionTransactionHistoryDownloadLinkById()` (`GET /eapi/v1/income/asyn/id`)
- `oldTradesLookup()` (`GET /eapi/v1/historicalTrades`)
- `optionAccountInformation()` (`GET /eapi/v1/account`)

#### WebSocket Streams

- `/<symbol>@depth<levels>@<updateSpeed>()` (`<symbol>@depth<levels>@<updateSpeed>` stream)
- `/<symbol>@index()` (`<symbol>@index` stream)
- `/<symbol>@ticker()` (`<symbol>@ticker` stream)
- `/<symbol>@trade()` (`<symbol>@trade` stream)
- `/<underlyingAsset>@markPrice()` (`<underlyingAsset>@markPrice` stream)
- `/<underlyingAsset>@openInterest@<expirationDate>()` (`<underlyingAsset>@openInterest@<expirationDate>` stream)
- `/<underlyingAsset>@ticker@<expirationDate>()` (`<underlyingAsset>@ticker@<expirationDate>` stream)
- `/option_pair()` (`option_pair` stream)

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
