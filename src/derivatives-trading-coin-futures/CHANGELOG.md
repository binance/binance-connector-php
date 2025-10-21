# Changelog

## 2.0.0 - 2025-10-21

### Changed (24)

#### REST API

- Modified response for `compressedAggregateTradesList()` (`GET /dapi/v1/aggTrades`):

- Modified response for `orderBook()` (`GET /dapi/v1/depth`):

- Modified response for `exchangeInformation()` (`GET /dapi/v1/exchangeInfo`):
  - `symbols`.`filters`.`multiplierDecimal`: type `integer` → `string`

- Modified response for `getFundingRateInfo()` (`GET /dapi/v1/fundingInfo`):

- Modified response for `queryOrder()` (`GET /dapi/v1/order`):
  - property `positionSide` added

#### WebSocket Streams

- Modified response for `allBookTickersStream()` (`!bookTicker` stream):

- Modified response for `contractInfoStream()` (`!contractInfo` stream):

- Modified response for `allMarketLiquidationOrderStreams()` (`!forceOrder@arr` stream):

- Modified response for `allMarketMiniTickersStream()` (`!miniTicker@arr` stream):

- Modified response for `allMarketTickersStreams()` (`!ticker@arr` stream):

- Modified response for `indexPriceStream()` (`<pair>@indexPrice@<updateSpeed>` stream):

- Modified response for `indexKlineCandlestickStreams()` (`<pair>@indexPriceKline_<interval>` stream):

- Modified response for `markPriceOfAllSymbolsOfAPair()` (`<pair>@markPrice@<updateSpeed>` stream):

- Modified response for `continuousContractKlineCandlestickStreams()` (`<pair>_<contractType>@continuousKline_<interval>` stream):

- Modified response for `aggregateTradeStreams()` (`<symbol>@aggTrade` stream):

- Modified response for `individualSymbolBookTickerStreams()` (`<symbol>@bookTicker` stream):

- Modified response for `partialBookDepthStreams()` (`<symbol>@depth<levels>@<updateSpeed>` stream):

- Modified response for `diffBookDepthStreams()` (`<symbol>@depth@<updateSpeed>` stream):

- Modified response for `liquidationOrderStreams()` (`<symbol>@forceOrder` stream):

- Modified response for `klineCandlestickStreams()` (`<symbol>@kline_<interval>` stream):

- Modified response for `markPriceStream()` (`<symbol>@markPrice@<updateSpeed>` stream):

- Modified response for `markPriceKlineCandlestickStreams()` (`<symbol>@markPriceKline_<interval>` stream):

- Modified response for `individualSymbolMiniTickerStream()` (`<symbol>@miniTicker` stream):

- Modified response for `individualSymbolTickerStreams()` (`<symbol>@ticker` stream):

## 1.0.0 - 2025-07-03

- Initial release
