# Changelog

## 3.0.0 - 2026-01-08

### Added (14)

#### REST API

- `adlRisk()` (`GET /fapi/v1/symbolAdlRisk`)
- `cancelAlgoOrder()` (`DELETE /fapi/v1/algoOrder`)
- `cancelAllAlgoOpenOrders()` (`DELETE /fapi/v1/algoOpenOrders`)
- `currentAllAlgoOpenOrders()` (`GET /fapi/v1/openAlgoOrders`)
- `futuresTradfiPerpsContract()` (`POST /fapi/v1/stock/contract`)
- `newAlgoOrder()` (`POST /fapi/v1/algoOrder`)
- `queryAlgoOrder()` (`GET /fapi/v1/algoOrder`)
- `queryAllAlgoOrders()` (`GET /fapi/v1/allAlgoOrders`)
- `rpiOrderBook()` (`GET /fapi/v1/rpiDepth`)
- `tradingSchedule()` (`GET /fapi/v1/tradingSchedule`)

#### WebSocket API

- `cancelAlgoOrder()` (`algoOrder.cancel` method)
- `newAlgoOrder()` (`algoOrder.place` method)

#### WebSocket Streams

- `rpiDiffBookDepthStreams()` (`<symbol>@rpiDepth@500ms` stream)
- `tradingSessionStream()` (`tradingSession` stream)

### Changed (18)

#### REST API

- Deleted parameter `activationPrice`
  - affected methods:
    - `newOrder()` (`POST /fapi/v1/order`)
- Deleted parameter `callbackRate`
  - affected methods:
    - `newOrder()` (`POST /fapi/v1/order`)
- Deleted parameter `closePosition`
  - affected methods:
    - `newOrder()` (`POST /fapi/v1/order`)
- Deleted parameter `priceProtect`
  - affected methods:
    - `newOrder()` (`POST /fapi/v1/order`)
- Deleted parameter `stopPrice`
  - affected methods:
    - `newOrder()` (`POST /fapi/v1/order`)
- Deleted parameter `workingType`
  - affected methods:
    - `newOrder()` (`POST /fapi/v1/order`)
- Modified parameter `batchOrders`:
  - items: property `priceProtect` deleted
  - items: property `stopPrice` deleted
  - items: property `activationPrice` deleted
  - items: property `workingType` deleted
  - items: property `callbackRate` deleted
  - items.`goodTillDate`: type `integer` → `string`
  - items.`price`: type `number` → `string`
  - items.`quantity`: type `number` → `string`
  - items.`timeInForce`: enum added: `RPI`
  - items: item property `priceProtect` deleted
  - items: item property `stopPrice` deleted
  - items: item property `activationPrice` deleted
  - items: item property `workingType` deleted
  - items: item property `callbackRate` deleted
  - items.`goodTillDate`: type `integer` → `string`
  - items.`price`: type `number` → `string`
  - items.`quantity`: type `number` → `string`
  - items.`timeInForce`: enum added: `RPI`
  - affected methods:
    - `placeMultipleOrders()` (`POST /fapi/v1/batchOrders`)
- Modified parameter `batchOrders`:
  - items.`orderId`: type `integer` → `string`
  - items.`price`: type `number` → `string`
  - items.`quantity`: type `number` → `string`
  - items.`recvWindow`: type `integer` → `string`
  - items.`orderId`: type `integer` → `string`
  - items.`price`: type `number` → `string`
  - items.`quantity`: type `number` → `string`
  - items.`recvWindow`: type `integer` → `string`
  - affected methods:
    - `modifyMultipleOrders()` (`PUT /fapi/v1/batchOrders`)
- Modified parameter `timeInForce`:
  - enum added: `RPI`
  - affected methods:
    - `newOrder()` (`POST /fapi/v1/order`)
    - `testOrder()` (`POST /fapi/v1/order/test`)
- Modified response for `placeMultipleOrders()` (`POST /fapi/v1/batchOrders`):
  - items: property `activatePrice` deleted
  - items: property `priceRate` deleted
  - items: item property `activatePrice` deleted
  - items: item property `priceRate` deleted

- Modified response for `userCommissionRate()` (`GET /fapi/v1/commissionRate`):
  - property `rpiCommissionRate` added

- Modified response for `oldTradesLookup()` (`GET /fapi/v1/historicalTrades`):
  - items: property `isRPITrade` added
  - items: item property `isRPITrade` added

- Modified response for `newOrder()` (`POST /fapi/v1/order`):
  - property `activatePrice` deleted
  - property `priceRate` deleted

- Modified response for `recentTradesList()` (`GET /fapi/v1/trades`):
  - items: property `isRPITrade` added
  - items: item property `isRPITrade` added

#### WebSocket API

- Modified parameter `timeInForce`:
  - enum added: `RPI`
  - affected methods:
    - `newOrder()` (`order.place` method)
- Modified response for `symbolOrderBookTicker()` (`ticker.book` method):
  - oneOf modified

- Modified response for `symbolPriceTicker()` (`ticker.price` method):
  - oneOf modified

#### WebSocket Streams

- Modified response for `aggregateTradeStreams()` (`<symbol>@aggTrade` stream):
  - property `nq` added

## 2.0.0 - 2025-10-21

### Changed (23)

#### REST API

- Modified response for `compressedAggregateTradesList()` (`GET /fapi/v1/aggTrades`):

- Modified response for `orderBook()` (`GET /fapi/v1/depth`):

- Modified response for `notionalAndLeverageBrackets()` (`GET /fapi/v1/leverageBracket`):

- Modified response for `accountInformationV3()` (`GET /fapi/v3/account`):
  - `assets`: item property `marginAvailable` deleted

#### WebSocket API

- Modified response for `orderBook()` (`depth` method):

#### WebSocket Streams

- Modified response for `multiAssetsModeAssetIndex()` (`!assetIndex@arr` stream):

- Modified response for `allBookTickersStream()` (`!bookTicker` stream):

- Modified response for `contractInfoStream()` (`!contractInfo` stream):

- Modified response for `allMarketLiquidationOrderStreams()` (`!forceOrder@arr` stream):

- Modified response for `markPriceStreamForAllMarket()` (`!markPrice@arr@<updateSpeed>` stream):

- Modified response for `allMarketMiniTickersStream()` (`!miniTicker@arr` stream):

- Modified response for `allMarketTickersStreams()` (`!ticker@arr` stream):

- Modified response for `continuousContractKlineCandlestickStreams()` (`<pair>_<contractType>@continuousKline_<interval>` stream):

- Modified response for `aggregateTradeStreams()` (`<symbol>@aggTrade` stream):

- Modified response for `individualSymbolBookTickerStreams()` (`<symbol>@bookTicker` stream):

- Modified response for `compositeIndexSymbolInformationStreams()` (`<symbol>@compositeIndex` stream):

- Modified response for `partialBookDepthStreams()` (`<symbol>@depth<levels>@<updateSpeed>` stream):

- Modified response for `diffBookDepthStreams()` (`<symbol>@depth@<updateSpeed>` stream):

- Modified response for `liquidationOrderStreams()` (`<symbol>@forceOrder` stream):

- Modified response for `klineCandlestickStreams()` (`<symbol>@kline_<interval>` stream):

- Modified response for `markPriceStream()` (`<symbol>@markPrice@<updateSpeed>` stream):

- Modified response for `individualSymbolMiniTickerStream()` (`<symbol>@miniTicker` stream):

- Modified response for `individualSymbolTickerStreams()` (`<symbol>@ticker` stream):

## 1.0.0 - 2025-07-03

- Initial release
