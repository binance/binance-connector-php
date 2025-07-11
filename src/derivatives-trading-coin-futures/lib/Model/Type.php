<?php

/**
 * Type.
 *
 * PHP version 8.1
 *
 * @category Class
 *
 * @author   OpenAPI Generator team
 *
 * @see     https://openapi-generator.tech
 */

/**
 * Binance Derivatives Trading COIN Futures REST API.
 *
 * OpenAPI Specification for the Binance Derivatives Trading COIN Futures REST API
 *
 * The version of the OpenAPI document: 1.0.0
 * Generated by: https://openapi-generator.tech
 * Generator version: 7.12.0
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace Binance\Client\DerivativesTradingCoinFutures\Model;

/**
 * Type Class Doc Comment.
 *
 * @category Class
 *
 * @author   OpenAPI Generator team
 *
 * @see     https://openapi-generator.tech
 */
enum Type: string
{
    /**
     * Possible values of this enum.
     */
    case LIMIT = 'LIMIT';

    case MARKET = 'MARKET';

    case STOP = 'STOP';

    case STOP_MARKET = 'STOP_MARKET';

    case TAKE_PROFIT = 'TAKE_PROFIT';

    case TAKE_PROFIT_MARKET = 'TAKE_PROFIT_MARKET';

    case TRAILING_STOP_MARKET = 'TRAILING_STOP_MARKET';

    /**
     * Gets allowable values of the enum.
     *
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::LIMIT,
            self::MARKET,
            self::STOP,
            self::STOP_MARKET,
            self::TAKE_PROFIT,
            self::TAKE_PROFIT_MARKET,
            self::TRAILING_STOP_MARKET,
        ];
    }
}
