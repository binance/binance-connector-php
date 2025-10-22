# Changelog

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
