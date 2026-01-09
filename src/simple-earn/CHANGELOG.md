# Changelog

## 3.0.0 - 2026-01-08

### Added (8)

- `getBfusdAccount()` (`GET /sapi/v1/bfusd/account`)
- `getBfusdQuotaDetails()` (`GET /sapi/v1/bfusd/quota`)
- `getBfusdRateHistory()` (`GET /sapi/v1/bfusd/history/rateHistory`)
- `getBfusdRedemptionHistory()` (`GET /sapi/v1/bfusd/history/redemptionHistory`)
- `getBfusdRewardsHistory()` (`GET /sapi/v1/bfusd/history/rewardsHistory`)
- `getBfusdSubscriptionHistory()` (`GET /sapi/v1/bfusd/history/subscriptionHistory`)
- `redeemBfusd()` (`POST /sapi/v1/bfusd/redeem`)
- `subscribeBfusd()` (`POST /sapi/v1/bfusd/subscribe`)

## 2.0.0 - 2025-10-21

### Added (16)

- `getBfusdAccount()` (`GET /sapi/v1/bfusd/account`)
- `getBfusdQuotaDetails()` (`GET /sapi/v1/bfusd/quota`)
- `getBfusdRateHistory()` (`GET /sapi/v1/bfusd/history/rateHistory`)
- `getBfusdRedemptionHistory()` (`GET /sapi/v1/bfusd/history/redemptionHistory`)
- `getBfusdRewardsHistory()` (`GET /sapi/v1/bfusd/history/rewardsHistory`)
- `getBfusdSubscriptionHistory()` (`GET /sapi/v1/bfusd/history/subscriptionHistory`)
- `redeemBfusd()` (`POST /sapi/v1/bfusd/redeem`)
- `subscribeBfusd()` (`POST /sapi/v1/bfusd/subscribe`)
- `getRwusdAccount()` (`GET /sapi/v1/rwusd/account`)
- `getRwusdQuotaDetails()` (`GET /sapi/v1/rwusd/quota`)
- `getRwusdRateHistory()` (`GET /sapi/v1/rwusd/history/rateHistory`)
- `getRwusdRedemptionHistory()` (`GET /sapi/v1/rwusd/history/redemptionHistory`)
- `getRwusdRewardsHistory()` (`GET /sapi/v1/rwusd/history/rewardsHistory`)
- `getRwusdSubscriptionHistory()` (`GET /sapi/v1/rwusd/history/subscriptionHistory`)
- `redeemRwusd()` (`POST /sapi/v1/rwusd/redeem`)
- `subscribeRwusd()` (`POST /sapi/v1/rwusd/subscribe`)

### Changed (9)

- Modified parameter `current`:
  - affected methods:
    - `getRwusdRateHistory()` (`GET /sapi/v1/rwusd/history/rateHistory`)
    - `getRwusdRedemptionHistory()` (`GET /sapi/v1/rwusd/history/redemptionHistory`)
    - `getRwusdRewardsHistory()` (`GET /sapi/v1/rwusd/history/rewardsHistory`)
    - `getRwusdSubscriptionHistory()` (`GET /sapi/v1/rwusd/history/subscriptionHistory`)
    - `getCollateralRecord()` (`GET /sapi/v1/simple-earn/flexible/history/collateralRecord`)
    - `getRateHistory()` (`GET /sapi/v1/simple-earn/flexible/history/rateHistory`)
    - `getFlexibleRedemptionRecord()` (`GET /sapi/v1/simple-earn/flexible/history/redemptionRecord`)
    - `getFlexibleRewardsHistory()` (`GET /sapi/v1/simple-earn/flexible/history/rewardsRecord`)
    - `getFlexibleSubscriptionRecord()` (`GET /sapi/v1/simple-earn/flexible/history/subscriptionRecord`)
    - `getSimpleEarnFlexibleProductList()` (`GET /sapi/v1/simple-earn/flexible/list`)
    - `getFlexibleProductPosition()` (`GET /sapi/v1/simple-earn/flexible/position`)
    - `getLockedRedemptionRecord()` (`GET /sapi/v1/simple-earn/locked/history/redemptionRecord`)
    - `getLockedRewardsHistory()` (`GET /sapi/v1/simple-earn/locked/history/rewardsRecord`)
    - `getLockedSubscriptionRecord()` (`GET /sapi/v1/simple-earn/locked/history/subscriptionRecord`)
    - `getSimpleEarnLockedProductList()` (`GET /sapi/v1/simple-earn/locked/list`)
    - `getLockedProductPosition()` (`GET /sapi/v1/simple-earn/locked/position`)
- Modified parameter `recvWindow`:
  - affected methods:
    - `getRwusdAccount()` (`GET /sapi/v1/rwusd/account`)
    - `getRwusdRateHistory()` (`GET /sapi/v1/rwusd/history/rateHistory`)
    - `getRwusdRedemptionHistory()` (`GET /sapi/v1/rwusd/history/redemptionHistory`)
    - `getRwusdRewardsHistory()` (`GET /sapi/v1/rwusd/history/rewardsHistory`)
    - `getRwusdSubscriptionHistory()` (`GET /sapi/v1/rwusd/history/subscriptionHistory`)
    - `getRwusdQuotaDetails()` (`GET /sapi/v1/rwusd/quota`)
    - `redeemRwusd()` (`POST /sapi/v1/rwusd/redeem`)
    - `subscribeRwusd()` (`POST /sapi/v1/rwusd/subscribe`)
    - `simpleAccount()` (`GET /sapi/v1/simple-earn/account`)
    - `getCollateralRecord()` (`GET /sapi/v1/simple-earn/flexible/history/collateralRecord`)
    - `getRateHistory()` (`GET /sapi/v1/simple-earn/flexible/history/rateHistory`)
    - `getFlexibleRedemptionRecord()` (`GET /sapi/v1/simple-earn/flexible/history/redemptionRecord`)
    - `getFlexibleRewardsHistory()` (`GET /sapi/v1/simple-earn/flexible/history/rewardsRecord`)
    - `getFlexibleSubscriptionRecord()` (`GET /sapi/v1/simple-earn/flexible/history/subscriptionRecord`)
    - `getSimpleEarnFlexibleProductList()` (`GET /sapi/v1/simple-earn/flexible/list`)
    - `getFlexiblePersonalLeftQuota()` (`GET /sapi/v1/simple-earn/flexible/personalLeftQuota`)
    - `getFlexibleProductPosition()` (`GET /sapi/v1/simple-earn/flexible/position`)
    - `redeemFlexibleProduct()` (`POST /sapi/v1/simple-earn/flexible/redeem`)
    - `setFlexibleAutoSubscribe()` (`POST /sapi/v1/simple-earn/flexible/setAutoSubscribe`)
    - `subscribeFlexibleProduct()` (`POST /sapi/v1/simple-earn/flexible/subscribe`)
    - `getFlexibleSubscriptionPreview()` (`GET /sapi/v1/simple-earn/flexible/subscriptionPreview`)
    - `getLockedRedemptionRecord()` (`GET /sapi/v1/simple-earn/locked/history/redemptionRecord`)
    - `getLockedRewardsHistory()` (`GET /sapi/v1/simple-earn/locked/history/rewardsRecord`)
    - `getLockedSubscriptionRecord()` (`GET /sapi/v1/simple-earn/locked/history/subscriptionRecord`)
    - `getSimpleEarnLockedProductList()` (`GET /sapi/v1/simple-earn/locked/list`)
    - `getLockedPersonalLeftQuota()` (`GET /sapi/v1/simple-earn/locked/personalLeftQuota`)
    - `getLockedProductPosition()` (`GET /sapi/v1/simple-earn/locked/position`)
    - `redeemLockedProduct()` (`POST /sapi/v1/simple-earn/locked/redeem`)
    - `setLockedAutoSubscribe()` (`POST /sapi/v1/simple-earn/locked/setAutoSubscribe`)
    - `setLockedProductRedeemOption()` (`POST /sapi/v1/simple-earn/locked/setRedeemOption`)
    - `subscribeLockedProduct()` (`POST /sapi/v1/simple-earn/locked/subscribe`)
    - `getLockedSubscriptionPreview()` (`GET /sapi/v1/simple-earn/locked/subscriptionPreview`)
- Modified parameter `size`:
  - affected methods:
    - `getRwusdRateHistory()` (`GET /sapi/v1/rwusd/history/rateHistory`)
    - `getRwusdRedemptionHistory()` (`GET /sapi/v1/rwusd/history/redemptionHistory`)
    - `getRwusdRewardsHistory()` (`GET /sapi/v1/rwusd/history/rewardsHistory`)
    - `getRwusdSubscriptionHistory()` (`GET /sapi/v1/rwusd/history/subscriptionHistory`)
    - `getCollateralRecord()` (`GET /sapi/v1/simple-earn/flexible/history/collateralRecord`)
    - `getRateHistory()` (`GET /sapi/v1/simple-earn/flexible/history/rateHistory`)
    - `getFlexibleRedemptionRecord()` (`GET /sapi/v1/simple-earn/flexible/history/redemptionRecord`)
    - `getFlexibleRewardsHistory()` (`GET /sapi/v1/simple-earn/flexible/history/rewardsRecord`)
    - `getFlexibleSubscriptionRecord()` (`GET /sapi/v1/simple-earn/flexible/history/subscriptionRecord`)
    - `getSimpleEarnFlexibleProductList()` (`GET /sapi/v1/simple-earn/flexible/list`)
    - `getFlexibleProductPosition()` (`GET /sapi/v1/simple-earn/flexible/position`)
    - `getLockedRedemptionRecord()` (`GET /sapi/v1/simple-earn/locked/history/redemptionRecord`)
    - `getLockedRewardsHistory()` (`GET /sapi/v1/simple-earn/locked/history/rewardsRecord`)
    - `getLockedSubscriptionRecord()` (`GET /sapi/v1/simple-earn/locked/history/subscriptionRecord`)
    - `getSimpleEarnLockedProductList()` (`GET /sapi/v1/simple-earn/locked/list`)
    - `getLockedProductPosition()` (`GET /sapi/v1/simple-earn/locked/position`)
- Modified parameter `amount`:
  - affected methods:
    - `subscribeFlexibleProduct()` (`POST /sapi/v1/simple-earn/flexible/subscribe`)
    - `getFlexibleSubscriptionPreview()` (`GET /sapi/v1/simple-earn/flexible/subscriptionPreview`)
    - `subscribeLockedProduct()` (`POST /sapi/v1/simple-earn/locked/subscribe`)
    - `getLockedSubscriptionPreview()` (`GET /sapi/v1/simple-earn/locked/subscriptionPreview`)
- Modified parameter `asset`:
  - affected methods:
    - `getFlexibleRedemptionRecord()` (`GET /sapi/v1/simple-earn/flexible/history/redemptionRecord`)
    - `getFlexibleRewardsHistory()` (`GET /sapi/v1/simple-earn/flexible/history/rewardsRecord`)
    - `getFlexibleSubscriptionRecord()` (`GET /sapi/v1/simple-earn/flexible/history/subscriptionRecord`)
    - `getSimpleEarnFlexibleProductList()` (`GET /sapi/v1/simple-earn/flexible/list`)
    - `getFlexibleProductPosition()` (`GET /sapi/v1/simple-earn/flexible/position`)
    - `getLockedRedemptionRecord()` (`GET /sapi/v1/simple-earn/locked/history/redemptionRecord`)
    - `getLockedRewardsHistory()` (`GET /sapi/v1/simple-earn/locked/history/rewardsRecord`)
    - `getLockedSubscriptionRecord()` (`GET /sapi/v1/simple-earn/locked/history/subscriptionRecord`)
    - `getSimpleEarnLockedProductList()` (`GET /sapi/v1/simple-earn/locked/list`)
    - `getLockedProductPosition()` (`GET /sapi/v1/simple-earn/locked/position`)
- Modified parameter `type`:
  - affected methods:
    - `getFlexibleRewardsHistory()` (`GET /sapi/v1/simple-earn/flexible/history/rewardsRecord`)

- Modified response for `getSimpleEarnFlexibleProductList()` (`GET /sapi/v1/simple-earn/flexible/list`):
  - `rows`.`subscriptionStartTime`: type `string` → `integer`

- Modified response for `getSimpleEarnLockedProductList()` (`GET /sapi/v1/simple-earn/locked/list`):
  - `rows`.`detail`.`boostEndTime`: type `string` → `integer`
  - `rows`.`detail`.`subscriptionStartTime`: type `string` → `integer`

- Modified response for `getLockedProductPosition()` (`GET /sapi/v1/simple-earn/locked/position`):

## 1.0.0 - 2025-07-03

- Initial release
