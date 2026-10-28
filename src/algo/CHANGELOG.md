# Changelog

## 8.0.0 - 2026-10-28

**Algo**

### Added (1)

- `volumeParticipation()` (`POST /sapi/v1/algo/spot/newOrderVp`)

### Changed (4)

- Modified response for `queryHistoricalAlgoOrdersSpotAlgo()` (`GET /sapi/v1/algo/spot/historicalOrders`):
  - `orders`.items: property `duration` added
  - `orders`.items: item property `duration` added

- Modified response for `queryCurrentAlgoOpenOrdersSpotAlgo()` (`GET /sapi/v1/algo/spot/openOrders`):
  - `orders`.items: property `duration` added
  - `orders`.items: item property `duration` added

- Modified response field `orders`:
  - items: property `duration` added
  - items: item property `duration` added
  - affected events:
    - `queryCurrentAlgoOpenOrdersSpotAlgoResponse`
    - `queryHistoricalAlgoOrdersSpotAlgoResponse`
- Added response schema `volumeParticipationResponse`

## 7.0.0 - 2026-09-24

**Algo**

### Changed (2)

- Added parameter `clientAlgoId`
  - affected methods:
    - `cancelAlgoOrderFutureAlgo()` (`DELETE /sapi/v1/algo/futures/order`)
    - `cancelAlgoOrderSpotAlgo()` (`DELETE /sapi/v1/algo/spot/order`)
- Modified parameter `algoId`:
  - required: `true` → `false`
  - affected methods:
    - `cancelAlgoOrderFutureAlgo()` (`DELETE /sapi/v1/algo/futures/order`)
    - `cancelAlgoOrderSpotAlgo()` (`DELETE /sapi/v1/algo/spot/order`)

## 2.0.0 - 2026-07-28

### Changed (4)

- Modified parameter `clientAlgoId`:
  - minLength `0` → `32`
  - maxLength `null` → `32`
  - affected methods:
    - `timeWeightedAveragePriceFutureAlgo()` (`POST /sapi/v1/algo/futures/newOrderTwap`)
    - `volumeParticipationFutureAlgo()` (`POST /sapi/v1/algo/futures/newOrderVp`)
    - `timeWeightedAveragePriceSpotAlgo()` (`POST /sapi/v1/algo/spot/newOrderTwap`)
- Modified parameter `positionSide`:
  - enum added: `BOTH`, `LONG`, `SHORT`
  - affected methods:
    - `timeWeightedAveragePriceFutureAlgo()` (`POST /sapi/v1/algo/futures/newOrderTwap`)
    - `volumeParticipationFutureAlgo()` (`POST /sapi/v1/algo/futures/newOrderVp`)
- Modified parameter `side`:
  - enum added: `BUY`, `SELL`
  - affected methods:
    - `queryHistoricalAlgoOrdersFutureAlgo()` (`GET /sapi/v1/algo/futures/historicalOrders`)
    - `timeWeightedAveragePriceFutureAlgo()` (`POST /sapi/v1/algo/futures/newOrderTwap`)
    - `volumeParticipationFutureAlgo()` (`POST /sapi/v1/algo/futures/newOrderVp`)
    - `queryHistoricalAlgoOrdersSpotAlgo()` (`GET /sapi/v1/algo/spot/historicalOrders`)
    - `timeWeightedAveragePriceSpotAlgo()` (`POST /sapi/v1/algo/spot/newOrderTwap`)
- Modified parameter `urgency`:
  - enum added: `LOW`, `MEDIUM`, `HIGH`
  - affected methods:
    - `volumeParticipationFutureAlgo()` (`POST /sapi/v1/algo/futures/newOrderVp`)

## 1.0.0 - 2025-07-03

- Initial release
