# Changelog

## 6.0.0 - 2026-07-28

### Changed (30)

#### REST API

- Modified parameter `algoType`:
  - enum added: `CONDITIONAL`
  - affected methods:
    - `newUmAlgoOrder()` (`POST /papi/v1/um/algo/order`)
- Modified parameter `archived`:
  - enum added: `true`, `false`
  - affected methods:
    - `getMarginBorrowLoanInterestHistory()` (`GET /papi/v1/margin/marginInterestHistory`)
    - `queryMarginLoanRecord()` (`GET /papi/v1/margin/marginLoan`)
    - `queryMarginRepayRecord()` (`GET /papi/v1/margin/repayLoan`)
- Modified parameter `autoRepay`:
  - enum added: `true`, `false`
  - affected methods:
    - `changeAutoRepayFuturesStatus()` (`POST /papi/v1/repay-futures-switch`)
- Modified parameter `autoRepayAtCancel`:
  - enum added: `true`, `false`
  - affected methods:
    - `newMarginOrder()` (`POST /papi/v1/margin/order`)
- Modified parameter `dualSidePosition`:
  - enum added: `true`, `false`
  - affected methods:
    - `changeCmPositionMode()` (`POST /papi/v1/cm/positionSide/dual`)
    - `changeUmPositionMode()` (`POST /papi/v1/um/positionSide/dual`)
- Modified parameter `feeBurn`:
  - enum added: `true`, `false`
  - affected methods:
    - `toggleBnbBurnOnUmFuturesTrade()` (`POST /papi/v1/um/feeBurn`)
- Modified parameter `incomeType`:
  - enum added: `TRANSFER`, `WELCOME_BONUS`, `FUNDING_FEE`, `REALIZED_PNL`, `COMMISSION`, `INSURANCE_CLEAR`, `DELIVERED_SETTELMENT`
  - affected methods:
    - `getCmIncomeHistory()` (`GET /papi/v1/cm/income`)
- Modified parameter `incomeType`:
  - enum added: `TRANSFER`, `WELCOME_BONUS`, `REALIZED_PNL`, `FUNDING_FEE`, `COMMISSION`, `INSURANCE_CLEAR`, `REFERRAL_KICKBACK`, `COMMISSION_REBATE`, `API_REBATE`, `CONTEST_REWARD`, `CROSS_COLLATERAL_TRANSFER`, `OPTIONS_PREMIUM_FEE`, `OPTIONS_SETTLE_PROFIT`, `INTERNAL_TRANSFER`, `AUTO_EXCHANGE`, `DELIVERED_SETTELMENT`, `COIN_SWAP_DEPOSIT`, `COIN_SWAP_WITHDRAW`, `POSITION_LIMIT_INCREASE_FEE`
  - affected methods:
    - `getUmIncomeHistory()` (`GET /papi/v1/um/income`)
- Modified parameter `newOrderRespType`:
  - enum added: `FULL`
  - affected methods:
    - `newMarginOrder()` (`POST /papi/v1/margin/order`)
- Modified parameter `priceMatch`:
  - enum removed: `NONE`
  - affected methods:
    - `newCmOrder()` (`POST /papi/v1/cm/order`)
    - `modifyCmOrder()` (`PUT /papi/v1/cm/order`)
    - `newUmConditionalOrder()` (`POST /papi/v1/um/conditional/order`)
    - `newUmOrder()` (`POST /papi/v1/um/order`)
    - `modifyUmOrder()` (`PUT /papi/v1/um/order`)
- Modified parameter `priceMatch`:
  - enum removed: `NONE`
  - affected methods:
    - `newUmAlgoOrder()` (`POST /papi/v1/um/algo/order`)
- Modified parameter `priceProtect`:
  - enum added: `true`, `false`
  - affected methods:
    - `newCmConditionalOrder()` (`POST /papi/v1/cm/conditional/order`)
    - `newUmAlgoOrder()` (`POST /papi/v1/um/algo/order`)
    - `newUmConditionalOrder()` (`POST /papi/v1/um/conditional/order`)
- Modified parameter `reduceOnly`:
  - enum added: `true`, `false`
  - affected methods:
    - `newCmOrder()` (`POST /papi/v1/cm/order`)
    - `newUmAlgoOrder()` (`POST /papi/v1/um/algo/order`)
    - `newUmConditionalOrder()` (`POST /papi/v1/um/conditional/order`)
    - `newUmOrder()` (`POST /papi/v1/um/order`)
- Modified parameter `sideEffectType`:
  - enum added: `AUTO_BORROW_REPAY`
  - affected methods:
    - `newMarginOrder()` (`POST /papi/v1/margin/order`)
- Modified parameter `strategyType`:
  - enum removed: `LIMIT_MAKER`
  - affected methods:
    - `newCmConditionalOrder()` (`POST /papi/v1/cm/conditional/order`)
    - `newUmConditionalOrder()` (`POST /papi/v1/um/conditional/order`)
- Modified parameter `symbol`:
  - required: `true` → `false`
  - affected methods:
    - `queryAllCmOrders()` (`GET /papi/v1/cm/allOrders`)
- Modified parameter `timeInForce`:
  - enum removed: `GTX`
  - affected methods:
    - `newMarginOrder()` (`POST /papi/v1/margin/order`)
- Modified parameter `timeInForce`:
  - enum added: `GTD`
  - affected methods:
    - `newUmAlgoOrder()` (`POST /papi/v1/um/algo/order`)
- Modified parameter `timeInForce`:
  - enum added: `GTD`
  - affected methods:
    - `newUmConditionalOrder()` (`POST /papi/v1/um/conditional/order`)
    - `newUmOrder()` (`POST /papi/v1/um/order`)
- Modified parameter `transferSide`:
  - enum added: `TO_UM`, `FROM_UM`
  - affected methods:
    - `bnbTransfer()` (`POST /papi/v1/bnb-transfer`)
- Modified parameter `type`:
  - enum added: `STOP_LOSS`, `STOP_LOSS_LIMIT`, `TAKE_PROFIT`, `TAKE_PROFIT_LIMIT`, `LIMIT_MAKER`
  - affected methods:
    - `newMarginOrder()` (`POST /papi/v1/margin/order`)
- Modified parameter `type`:
  - enum removed: `LIMIT`, `MARKET`
  - enum added: `STOP`, `TAKE_PROFIT`, `STOP_MARKET`, `TAKE_PROFIT_MARKET`, `TRAILING_STOP_MARKET`
  - affected methods:
    - `newUmAlgoOrder()` (`POST /papi/v1/um/algo/order`)
- Modified parameter `workingType`:
  - enum added: `CONTRACT_PRICE`
  - affected methods:
    - `newCmConditionalOrder()` (`POST /papi/v1/cm/conditional/order`)
    - `newUmConditionalOrder()` (`POST /papi/v1/um/conditional/order`)
- Modified parameter `workingType`:
  - enum added: `CONTRACT_PRICE`
  - affected methods:
    - `newUmAlgoOrder()` (`POST /papi/v1/um/algo/order`)
- Modified response for `accountBalance()` (`GET /papi/v1/balance`):
  - oneOf modified

- Modified response for `queryCurrentUmOpenAlgoOrder()` (`GET /papi/v1/um/algo/algoOrder`):
  - property `slTriggerPrice` deleted
  - property `tpPrice` deleted
  - property `slPrice` deleted
  - property `tpOrderType` deleted
  - property `icebergQuantity` deleted
  - property `tpTriggerPrice` deleted

- Modified response for `queryUmAlgoOrderHistory()` (`GET /papi/v1/um/algo/allAlgoOrders`):
  - items: property `icebergQuantity` deleted
  - items: property `tpOrderType` deleted
  - items: property `tpPrice` deleted
  - items: property `slPrice` deleted
  - items: property `slTriggerPrice` deleted
  - items: property `tpTriggerPrice` deleted
  - items: item property `icebergQuantity` deleted
  - items: item property `tpOrderType` deleted
  - items: item property `tpPrice` deleted
  - items: item property `slPrice` deleted
  - items: item property `slTriggerPrice` deleted
  - items: item property `tpTriggerPrice` deleted

- Modified response for `queryAllCurrentUmOpenAlgoOrders()` (`GET /papi/v1/um/algo/openAlgoOrders`):
  - items: property `tpPrice` deleted
  - items: property `slTriggerPrice` deleted
  - items: property `actualPrice` deleted
  - items: property `actualOrderId` deleted
  - items: property `tpTriggerPrice` deleted
  - items: property `tpOrderType` deleted
  - items: property `icebergQuantity` deleted
  - items: property `slPrice` deleted
  - items: item property `tpPrice` deleted
  - items: item property `slTriggerPrice` deleted
  - items: item property `actualPrice` deleted
  - items: item property `actualOrderId` deleted
  - items: item property `tpTriggerPrice` deleted
  - items: item property `tpOrderType` deleted
  - items: item property `icebergQuantity` deleted
  - items: item property `slPrice` deleted

- Modified response for `newUmAlgoOrder()` (`POST /papi/v1/um/algo/order`):
  - property `icebergQuantity` deleted

- Modified response for `getUmIncomeHistory()` (`GET /papi/v1/um/income`):
  - items.`tranId`: type `integer` → `string`
  - items.`tranId`: type `integer` → `string`

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
