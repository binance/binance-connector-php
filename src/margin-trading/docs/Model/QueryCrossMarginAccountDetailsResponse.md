# QueryCrossMarginAccountDetailsResponse

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**created** | **bool** | True means margin account created , false means margin account not created. | [optional]
**borrowEnabled** | **bool** | borrow Enabled. | [optional]
**marginLevel** | **string** | margin Level. | [optional]
**collateralMarginLevel** | **string** | collateral Margin Level. | [optional]
**totalAssetOfBtc** | **string** | total Asset Of Btc. | [optional]
**totalLiabilityOfBtc** | **string** | total Liability Of Btc. | [optional]
**totalNetAssetOfBtc** | **string** | total Net Asset Of Btc. | [optional]
**totalCollateralValueInUSDT** | **string** | Total Collateral Value In USDT. | [optional]
**totalOpenOrderLossInUSDT** | **string** | total Open Order Loss In USDT. | [optional]
**tradeEnabled** | **bool** | trade Enabled. | [optional]
**transferInEnabled** | **bool** | transfer In Enabled. | [optional]
**transferOutEnabled** | **bool** | transfer Out Enabled. | [optional]
**accountType** | **string** | // MARGIN_1 for Cross Margin Classic, MARGIN_2 for Cross Margin Pro | [optional]
**userAssets** | [**\Binance\Client\MarginTrading\Model\QueryCrossMarginAccountDetailsResponseUserAssetsInner[]**](QueryCrossMarginAccountDetailsResponseUserAssetsInner.md) | user Assets list. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
