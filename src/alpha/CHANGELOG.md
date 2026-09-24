# Changelog

## 3.0.0 - 2026-08-25

**Alpha**

### Changed (1)

#### WebSocket Streams

- Modified parameter `id`:
  - type `string` → `integer`
  - affected methods:
    - `allBookTickerStream()` (`!bookTicker` stream)
    - `allMiniTickerStream()` (`!miniTicker@arr` stream)
    - `allTickerStream()` (`!ticker@arr` stream)
    - `aggregateTradeStream()` (`<symbol>@aggTrade` stream)
    - `bookTickerStream()` (`<symbol>@bookTicker` stream)
    - `partialDepthStream()` (`<symbol>@depth<levels>@<interval>` stream)
    - `fullDepthStream()` (`<symbol>@fulldepth@<interval>` stream)
    - `klineStream()` (`<symbol>@kline_<interval>` stream)
    - `miniTickerStream()` (`<symbol>@miniTicker` stream)
    - `tickerStream()` (`<symbol>@ticker` stream)
    - `tradeStream()` (`<symbol>@trade` stream)
    - `contractKlineStream()` (`came@<contractAddress>@<chainId>@kline_<interval>` stream)
    - `allTokens24hTickerStream()` (`came@allTokens@ticker24` stream)

## 2.0.0 - 2026-07-28

### Added (1)

#### REST API

- `fullDepth()` (`GET /bapi/defi/v1/public/alpha-trade/fullDepth`)

### Changed (1)

#### REST API

- Modified parameter `interval`:
  - enum added: `1s`, `15s`, `1m`, `3m`, `5m`, `15m`, `30m`, `1h`, `2h`, `4h`, `6h`, `8h`, `12h`, `1d`, `3d`, `1w`, `1M`
  - affected methods:
    - `klines()` (`GET /bapi/defi/v1/public/alpha-trade/klines`)

## 1.0.0 - 2026-20-01

- Initial release
