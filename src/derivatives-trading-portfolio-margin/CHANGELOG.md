# Changelog

## 5.0.0 - 2026-05-01

### Added (7)

#### REST API

- `cancelAllUmAlgoOpenOrders()` (`DELETE /papi/v1/um/algo/allOpenOrders`)
- `cancelUmAlgoOrder()` (`DELETE /papi/v1/um/algo/order`)
- `futuresTradfiPerpsContract()` (`POST /papi/v1/um/stock/contract`)
- `newUmAlgoOrder()` (`POST /papi/v1/um/algo/order`)
- `queryAllCurrentUmOpenAlgoOrders()` (`GET /papi/v1/um/algo/openAlgoOrders`)
- `queryCurrentUmOpenAlgoOrder()` (`GET /papi/v1/um/algo/algoOrder`)
- `queryUmAlgoOrderHistory()` (`GET /papi/v1/um/algo/allAlgoOrders`)

### Changed (10)

#### REST API

- Modified parameter `strategyType`:
  - enum added: `LIMIT_MAKER`
  - affected methods:
    - `newCmConditionalOrder()` (`POST /papi/v1/cm/conditional/order`)
    - `newUmConditionalOrder()` (`POST /papi/v1/um/conditional/order`)
- Modified response for `queryCurrentCmOpenOrder()` (`GET /papi/v1/cm/openOrder`):
  - type `object` → `array`
  - property `clientOrderId` deleted
  - property `timeInForce` deleted
  - property `cumBase` deleted
  - property `avgPrice` deleted
  - property `status` deleted
  - property `type` deleted
  - property `orderId` deleted
  - property `reduceOnly` deleted
  - property `origQty` deleted
  - property `pair` deleted
  - property `positionSide` deleted
  - property `executedQty` deleted
  - property `symbol` deleted
  - property `origType` deleted
  - property `side` deleted
  - property `price` deleted
  - property `time` deleted
  - property `updateTime` deleted

- Modified response for `getUmIncomeHistory()` (`GET /papi/v1/um/income`):
  - items.`tranId`: type `string` → `integer`
  - items.`tranId`: type `string` → `integer`

- Marked `cancelAllUmOpenConditionalOrders()` (`DELETE /papi/v1/um/conditional/allOpenOrders`) as deprecated.
- Marked `cancelUmConditionalOrder()` (`DELETE /papi/v1/um/conditional/order`) as deprecated.
- Marked `newUmConditionalOrder()` (`POST /papi/v1/um/conditional/order`) as deprecated.
- Marked `queryAllCurrentUmOpenConditionalOrders()` (`GET /papi/v1/um/conditional/openOrders`) as deprecated.
- Marked `queryAllUmConditionalOrders()` (`GET /papi/v1/um/conditional/allOrders`) as deprecated.
- Marked `queryCurrentUmOpenConditionalOrder()` (`GET /papi/v1/um/conditional/openOrder`) as deprecated.
- Marked `queryUmConditionalOrderHistory()` (`GET /papi/v1/um/conditional/orderHistory`) as deprecated.

## 3.0.0 - 2026-01-08

### Changed (1)

#### REST API

- Modified response for `umPositionAdlQuantileEstimation()` (`GET /papi/v1/um/adlQuantile`):
  - items.`adlQuantile`: property `HEDGE` deleted
  - items.`adlQuantile`: property `HEDGE` deleted

## 2.0.0 - 2025-10-21

### Changed (3)

#### REST API

- Modified parameter `autoRepay`:
  - affected methods:
    - `changeAutoRepayFuturesStatus()` (`POST /papi/v1/repay-futures-switch`)

- Modified response for `marginMaxBorrow()` (`GET /papi/v1/margin/maxBorrowable`):
  - `amount`: type `number` → `string`
  - `borrowLimit`: type `integer` → `string`

- Modified response for `newMarginOrder()` (`POST /papi/v1/margin/order`):
  - `marginBuyBorrowAmount`: type `integer` → `string`

## 1.0.0 - 2025-07-03

- Initial release
