# Changelog

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
