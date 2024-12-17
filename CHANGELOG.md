# CHANGELOG

## 1.7.0 - 2024-12-17
### Added
- Auto Invest
  - `GET /sapi/v1/lending/auto-invest/target-asset/list`
  - `GET /sapi/v1/lending/auto-invest/target-asset/roi/list`
  - `GET /sapi/v1/lending/auto-invest/all/asset`
  - `GET /sapi/v1/lending/auto-invest/source-asset/list`
  - `POST /sapi/v1/lending/auto-invest/plan/add`
  - `POST /sapi/v1/lending/auto-invest/plan/edit`
  - `POST /sapi/v1/lending/auto-invest/plan/edit-status`
  - `GET /sapi/v1/lending/auto-invest/plan/list`
  - `GET /sapi/v1/lending/auto-invest/plan/id`
  - `GET /sapi/v1/lending/auto-invest/history/list`
  - `GET /sapi/v1/lending/auto-invest/index/info`
  - `GET /sapi/v1/lending/auto-invest/index/user-summary`
  - `POST /sapi/v1/lending/auto-invest/one-off`
  - `GET /sapi/v1/lending/auto-invest/one-off/status`
  - `POST /sapi/v1/lending/auto-invest/redeem`
  - `GET /sapi/v1/lending/auto-invest/redeem/history`
  - `GET /sapi/v1/lending/auto-invest/rebalance/history`

- CryptoLoans
  - `POST /sapi/v2/loan/flexible/borrow`
  - `GET /sapi/v2/loan/flexible/ongoing/orders`
  - `GET /sapi/v2/loan/flexible/borrow/history`
  - `POST /sapi/v2/loan/flexible/repay`
  - `GET /sapi/v2/loan/flexible/repay/history`
  - `POST /sapi/v2/loan/flexible/adjust/ltv`
  - `GET /sapi/v2/loan/flexible/ltv/adjustment/history`
  - `GET /sapi/v2/loan/flexible/loanable/data`
  - `GET /sapi/v2/loan/flexible/collateral/data`

- Margin
  - `POST /sapi/v1/margin/order/oto`
  - `POST /sapi/v1/margin/order/otoco`

- PortfolioMargin
  - `GET /sapi/v2/portfolio/account`
  - `GET /sapi/v1/portfolio/balance`
  - `GET /sapi/v2/portfolio/collateralRate`

- SimpleEarns
  - `GET /sapi/v1/simple-earn/flexible/list`
  - `GET /sapi/v1/simple-earn/locked/list`
  - `POST /sapi/v1/simple-earn/flexible/subscribe`
  - `POST /sapi/v1/simple-earn/locked/subscribe`
  - `POST /sapi/v1/simple-earn/flexible/redeem`
  - `POST /sapi/v1/simple-earn/locked/redeem`
  - `GET /sapi/v1/simple-earn/flexible/position`
  - `GET /sapi/v1/simple-earn/locked/position`
  - `GET /sapi/v1/simple-earn/account`
  - `GET /sapi/v1/simple-earn/flexible/history/subscriptionRecord`
  - `GET /sapi/v1/simple-earn/locked/history/subscriptionRecord`
  - `GET /sapi/v1/simple-earn/flexible/history/redemptionRecord`
  - `GET /sapi/v1/simple-earn/locked/history/redemptionRecord`
  - `GET /sapi/v1/simple-earn/flexible/history/rewardsRecord`
  - `GET /sapi/v1/simple-earn/locked/history/rewardsRecord`
  - `POST /sapi/v1/simple-earn/flexible/setAutoSubscribe`
  - `POST /sapi/v1/simple-earn/locked/setAutoSubscribe`
  - `GET /sapi/v1/simple-earn/flexible/personalLeftQuota`
  - `GET /sapi/v1/simple-earn/locked/personalLeftQuota`
  - `GET /sapi/v1/simple-earn/flexible/subscriptionPreview`
  - `GET /sapi/v1/simple-earn/locked/subscriptionPreview`
  - `POST /sapi/v1/simple-earn/locked/setRedeemOption`
  - `GET /sapi/v1/simple-earn/flexible/history/rateHistory`
  - `GET /sapi/v1/simple-earn/flexible/history/collateralRecord`

- SubAccount
  - `GET /sapi/v1/managed-subaccount/queryTransLogForInvestor`
  - `GET /sapi/v1/managed-subaccount/queryTransLogForTradeParent`
  - `GET /sapi/v1/managed-subaccount/fetch-future-asset`
  - `GET /sapi/v1/managed-subaccount/marginAsset`
  - `GET /sapi/v1/managed-subaccount/info`
  - `GET /sapi/v1/managed-subaccount/deposit/address`
  - `GET /sapi/v1/managed-subaccount/query-trans-log`
  - `GET /sapi/v1/sub-account/transaction-statistics`
  - `POST /sapi/v1/sub-account/eoptions/enable`
  - `POST /sapi/v2/sub-account/subAccountApi/ipRestriction`
  - `GET /sapi/v4/sub-account/assets`
  - `GET /sapi/v1/margin/crossMarginCollateralRatio`

- Trade
  - `POST /api/v3/orderList/oto`
  - `POST /api/v3/orderList/otoco`

- Wallet
  - `GET /sapi/v1/account/info`

### Updated
- Upgrade dependencies
- Update OCO endpoint from `POST /api/v3/order/oco` to `POST /api/v3/orderList/oco`

### Removed
- Blvt
  - `GET /sapi/v1/blvt/tokenInfo`
  - `POST /sapi/v1/blvt/subscribe`
  - `GET /sapi/v1/blvt/subscribe/record`
  - `POST /sapi/v1/blvt/redeem`
  - `GET /sapi/v1/blvt/redeem/record`
  - `GET /sapi/v1/blvt/userLimit`

- CryptoLoans
  - `GET /sapi/v1/loan/loanable/data`
  - `GET /sapi/v1/loan/collateral/data`
  - `POST /sapi/v1/loan/borrow`
  - `POST /sapi/v1/loan/repay`
  - `GET /sapi/v1/loan/repay/collateral/rate`
  - `POST /sapi/v1/loan/adjust/ltv`
  - `POST /sapi/v1/loan/customize/margin_call`
  - `GET /sapi/v1/loan/ongoing/orders`

- Savings
  - `GET /sapi/v1/lending/daily/product/list`
  - `GET /sapi/v1/lending/daily/userLeftQuota`
  - `POST /sapi/v1/lending/daily/purchase`
  - `GET /sapi/v1/lending/daily/userRedemptionQuota`
  - `POST /sapi/v1/lending/daily/redeem`
  - `GET /sapi/v1/lending/daily/token/position`
  - `GET /sapi/v1/lending/union/account`
  - `GET /sapi/v1/lending/union/purchaseRecord`
  - `GET /sapi/v1/lending/union/redemptionRecord`
  - `GET /sapi/v1/lending/union/interestHistory`
  - `POST /sapi/v1/lending/positionChanged`
  - `GET /sapi/v1/lending/project/list`
  - `GET /sapi/v1/lending/project/position/list`
  - `POST /sapi/v1/lending/customizedFixed/purchase`

## 1.6.0 - 2024-05-30
### Added
- Convert
  - `GET /sapi/v1/convert/exchangeInfo`
  - `GET /sapi/v1/convert/assetInfo`
  - `POST /sapi/v1/convert/getQuote`
  - `POST /sapi/v1/convert/acceptQuote`
  - `GET /sapi/v1/convert/orderStatus`
  - `POST /sapi/v1/convert/limit/placeOrder`
  - `POST /sapi/v1/convert/limit/cancelOrder`
  - `GET /sapi/v1/convert/limit/queryOpenOrders`

- CryptoLoans
  - `POST /sapi/v1/loan/borrow`
  - `GET /sapi/v1/loan/borrow/history`
  - `GET /sapi/v1/loan/ongoing/orders`
  - `POST /sapi/v1/loan/repay`
  - `GET /sapi/v1/loan/repay/history`
  - `POST /sapi/v1/loan/adjust/ltv`
  - `GET /sapi/v1/loan/ltv/adjustment/history`
  - `GET /sapi/v1/loan/loanable/data`
  - `GET /sapi/v1/loan/collateral/data`
  - `GET /sapi/v1/loan/repay/collateral/rate`
  - `POST /sapi/v1/loan/customize/margin_call`

- DualInvestment
  - `GET /sapi/v1/dci/product/list`
  - `POST /sapi/v1/dci/product/subscribe`
  - `GET /sapi/v1/dci/product/positions`
  - `GET /sapi/v1/dci/product/accounts`
  - `POST /sapi/v1/dci/product/auto_compound/edit-status`

- GiftCard
  - `POST /sapi/v1/giftcard/buyCode`
  - `GET /sapi/v1/giftcard/buyCode/token-limit`

- Margin
  - `POST /sapi/v1/margin/borrow-repay`
  - `GET /sapi/v1/margin/borrow-repay`
  - `GET /sapi/v1/margin/crossMarginCollateralRatio`
  - `GET /sapi/v1/margin/exchange-small-liability`
  - `POST /sapi/v1/margin/exchange-small-liability`
  - `GET /sapi/v1/margin/exchange-small-liability-history`
  - `GET /sapi/v1/margin/next-hourly-interest-rate`
  - `GET /sapi/v1/margin/capital-flow`
  - `GET /sapi/v1/margin/delist-schedule`
  - `GET /sapi/v1/margin/available-inventory`
  - `POST /sapi/v1/margin/manual-liquidation`
  - `GET /sapi/v1/margin/leverageBracket`

- Market
  - `GET /api/v3/uiKlines`
  - `GET /api/v3/ticker/tradingDay`

- PortfolioMargin
  - `GET /sapi/v1/portfolio/interest-history`
  - `GET /sapi/v1/portfolio/asset-index-price`
  - `POST /sapi/v1/portfolio/auto-collection`
  - `POST /sapi/v1/portfolio/asset-collection`
  - `POST /sapi/v1/portfolio/bnb-transfer`
  - `POST /sapi/v1/portfolio/repay-futures-switch`
  - `GET /sapi/v1/portfolio/repay-futures-switch`
  - `POST /sapi/v1/portfolio/repay-futures-negative-balance`
  - `GET /sapi/v1/portfolio/margin-asset-leverage`

- Trade
  - `GET /api/v3/myPreventedMatches`
  - `GET /api/v3/myAllocations`
  - `GET /api/v3/account/commission`
  - `POST /api/v3/sor/order`
  - `POST /api/v3/sor/order/test`

- Wallet
  - `GET /sapi/v1/capital/contract/convertible-coins`
  - `POST /sapi/v1/capital/contract/convertible-coins`
  - `POST /sapi/v1/capital/deposit/credit-apply`
  - `GET /sapi/v1/capital/deposit/address/list`
  - `GET /sapi/v1/asset/wallet/balance`
  - `GET /sapi/v1/asset/custody/transfer-history`
  - `GET /sapi/v1/spot/delist-schedule`
  - `GET /sapi/v1/capital/withdraw/address/list`

### Updated
- Upgrade dependencies
- Update PHP version to 8.2

### Removed
- Bswap
  - `GET /sapi/v1/bswap/pools`
  - `GET /sapi/v1/bswap/liquidity`
  - `POST /sapi/v1/bswap/liquidityAdd`
  - `POST /sapi/v1/bswap/liquidityRemove`
  - `GET /sapi/v1/bswap/liquidityOps`
  - `GET /sapi/v1/bswap/quote`
  - `POST /sapi/v1/bswap/swap`
  - `GET /sapi/v1/bswap/swap`
  - `GET /sapi/v1/bswap/poolConfigure`
  - `GET /sapi/v1/bswap/addLiquidityPreview`
  - `GET /sapi/v1/bswap/removeLiquidityPreview`
  - `GET /sapi/v1/bswap/unclaimedRewards`
  - `POST /sapi/v1/bswap/claimRewards`
  - `GET /sapi/v1/bswap/claimedHistory`

- Margin
  - `GET /sapi/v1/margin/isolated/pair`
  - `POST /sapi/v1/margin/isolated/transfer`
  - `GET /sapi/v1/margin/isolated/transfer`
  - `GET /sapi/v1/margin/asset`
  - `POST /sapi/v1/margin/loan`
  - `GET /sapi/v1/margin/dribblet`
  - `GET /sapi/v1/margin/loan`
  - `GET /sapi/v1/margin/pair`
  - `POST /sapi/v1/margin/repay`
  - `GET /sapi/v1/margin/repay`
  - `POST /sapi/v1/margin/transfer`

- Staking
  - `GET /sapi/v1/staking/productList`
  - `POST /sapi/v1/staking/purchase`
  - `POST /sapi/v1/staking/redeem`
  - `GET /sapi/v1/staking/position`
  - `GET /sapi/v1/staking/stakingRecord`
  - `POST /sapi/v1/staking/setAutoStaking`
  - `GET /sapi/v1/staking/personalLeftQuota`

## 1.5.0 - 2023-07-03

### Updated
- Update `guzzlehttp/guzzle` to latest version
- Drop support of PHP 7.* or 8.0

## 1.4.0 - 2022-12-20

### Added
- Support RSA signature

## 1.3.0 - 2022-09-14

### Added

- New endpoints for Portfolio Margin:
  - `GET /sapi/v1/portfolio/pmLoan` to query Portfolio Margin Bankruptcy Loan Record.
  - `POST /sapi/v1/portfolio/repay` to repay Portfolio Margin Bankruptcy Loan.
  - `GET /sapi/v1/portfolio/collateralRate` to get Portfolio Margin Collateral Rate.

## 1.2.0 - 2022-07-19

### Added

- New endpoint `POST /sapi/v3/asset/getUserAsset`
- New endpoint `GET /sapi/v1/margin/dribblet`

### Updated

- Updated endpoint `GET /sapi/v1/convert/tradeFlow` weight

## 1.1.0 - 2022-07-07

### Add

- New endpoint `GET /api/v3/ticker`
- New endpoint `POST /api/v3/order/cancelReplace`
- New websocket stream `<symbol>@ticker_<window_size>`
- New websocket stream `!ticker_<window-size>@arr`

### Updated

- Pump `guzzlehttp/guzzle` to latest version
- Apply lint fix

## 1.0.2 - 2022-06-14
- Pump `guzzlehttp/guzzle` to latest version

## 1.0.1 - 2022-06-04
- Update `psr/log` to support latest version
- Fix issue in examples file
- Lint fix

## 1.0.0 - 2022-05-19
- First release
